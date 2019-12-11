<?php
/**
 * Class that makes cover images for the Link.
 * Cover file can be uploaded or generated (if not exists)
 * User: programmer
 * Date: 16/06/2019
 * Time: 14:12
 */

namespace App\Files;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageFacade;
use Intervention\Image\Image;
use App\Link;

class LinkFiles
{
    /**
     * @var FormRequest $request
     * Current Request instance
     */
    private $request;

    /**
     * @var Link $link
     * Instance of Link model for which files are uploaded
     */
    private $link;

    /**
     * @var int $max_public_width
     * Max width for link cover used for link page and lists
     */
    private $max_public_width    = 240;

    /**
     * @var int $max_public_height
     * Max height for link cover used for link page and lists
     */
    private $max_public_height   = 240;

    /**
     * @var string $absolute_public_path
     * Path to public cover image in filesystem.
     */
    private $absolute_public_path;

    /**
     * @var string $relative_public_path
     * Path to public cover image relative to storage.
     */
    private $relative_public_path;

    /**
     * @var string
     * Name of cover file. For all bopoks it's 'cover.jpg'
     */
    private $filename;


    /**
     * LinkFiles constructor.
     * @param FormRequest $request
     * @param Link $link
     */
    public function __construct(Link $link, FormRequest $request = null)
    {
        $this->request  = $request ?? null;
        $this->link     = $link;
        $this->filename = 'cover.jpg';
        $this->absolute_public_path = storage_path('app/public/LinkImages/'.$this->link->id);
        $this->relative_public_path = 'public/LinkImages/'.$this->link->id;

    }

    /**
     * @return void
     */
    public function save()
    {
        if ($this->request->hasFile('cover')) {

            // Delete old cover
            if (Storage::exists($this->relative_public_path . '/' . $this->filename)) {
                Storage::delete($this->relative_public_path . '/' . $this->filename);
            }

            $this->request->cover->storeAs($this->relative_public_path, $this->filename);

            // Resize public cover image
            $this->makePublicCover();
        }
    }

    /**
     * @return void
     */
    public function delete()
    {
        if (Storage::exists($this->relative_public_path)) {
            Storage::deleteDirectory($this->relative_public_path);
        }
//        if (Storage::exists($this->relative_public_path . '/' . $this->filename)) {
//            Storage::delete($this->relative_public_path . '/' . $this->filename);
//        }
    }


    /**
     * Resizes public image to dimensions needed for show on link page and links lists
     * @return void
     */
    private function makePublicCover()
    {
        $image = ImageFacade::make($this->absolute_public_path . '/' . $this->filename);

        if ($image->width() >= $image->height()) {
            $image->resize(null, $this->max_public_height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        else {
            $image->resize($this->max_public_width, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        $image->crop($this->max_public_width, $this->max_public_height);
        $image->save();
    }

}