<?php
/**
 * Resolves a YouTube URL to the video code and title.
 * Uses the YouTube Data API when an API key is configured,
 * otherwise falls back to the keyless oEmbed endpoint.
 * User: programmer
 * Date: 16/06/2019
 * Time: 14:12
 */

namespace App\Service;

use Illuminate\Support\Facades\Log;
use UnexpectedValueException;

class YoutubeParser
{
    /**
     * URL to get Youtube video information
     */
    const API_URL = 'https://www.googleapis.com/youtube/v3/videos';

    /**
     * Keyless endpoint that returns the title of a public video
     */
    const OEMBED_URL = 'https://www.youtube.com/oembed';

    public function parse(string $url):array
    {
        $video_id = $this->extractId($url);

        $title = $this->titleFromApi($video_id);
        if ($title === null) {
            $title = $this->titleFromOembed($video_id);
        }

        if ($title === null) {
            $message = 'Не удалось получить информацию о видео с YouTube. Проверьте ссылку и доступность видео.';
            if ($this->last_error) {
                $message .= ' (' . $this->last_error . ')';
            }
            throw new UnexpectedValueException($message);
        }

        return [
            'code'  => $video_id,
            'title' => $title,
        ];
    }

    /**
     * @param string $url
     * @return string video id
     */
    private function extractId(string $url):string
    {
        preg_match("#(?<=v=)[a-zA-Z0-9_-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
        if (!$matches or !isset($matches[0])) {
            throw new UnexpectedValueException('Cannot find video using given URL');
        }

        // strip a trailing query string, e.g. youtu.be/ID?si=...
        $video_id = preg_split('/[?&#]/', $matches[0])[0];

        if ($video_id === '') {
            throw new UnexpectedValueException('Cannot find video using given URL');
        }

        return $video_id;
    }

    /**
     * @param string $video_id
     * @return string|null title, or null when the API is unusable
     */
    private function titleFromApi(string $video_id)
    {
        $key = config('services.youtube.key');
        if (!$key) {
            return null;
        }

        $resp = $this->get(self::API_URL . '?' . http_build_query([
            'id'   => $video_id,
            'key'  => $key,
            'part' => 'snippet',
        ]));

        $arr = json_decode($resp, true);

        return $arr['items'][0]['snippet']['title'] ?? null;
    }

    /**
     * @param string $video_id
     * @return string|null title, or null when the video is not public
     */
    private function titleFromOembed(string $video_id)
    {
        $resp = $this->get(self::OEMBED_URL . '?' . http_build_query([
            'url'    => 'https://www.youtube.com/watch?v=' . $video_id,
            'format' => 'json',
        ]));

        $arr = json_decode($resp, true);

        return $arr['title'] ?? null;
    }

    /**
     * The reason the last failed request failed, for the log and the admin message.
     *
     * @var string|null
     */
    private $last_error;

    /**
     * @param string $url
     * @return string response body, empty string on a failed request
     */
    private function get(string $url):string
    {
        if (!function_exists('curl_init')) {
            $this->last_error = 'ext-curl is not installed';
            Log::warning('YoutubeParser: ' . $this->last_error);
            return '';
        }

        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT        => 10,
        ]);
        $resp = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $err  = curl_error($curl);
        curl_close($curl);

        if ($resp === false or $err) {
            $this->last_error = 'curl error: ' . ($err ?: 'unknown');
        } elseif ($code < 200 or $code >= 300) {
            $this->last_error = 'HTTP ' . $code . ': ' . mb_substr((string) $resp, 0, 300);
        } else {
            return $resp;
        }

        Log::warning('YoutubeParser request failed', [
            'url'   => preg_replace('/key=[^&]+/', 'key=***', $url),
            'error' => $this->last_error,
        ]);

        return '';
    }
}
