<?php

namespace App\Http\Controllers;

use App\Link;
use App\TextLink;
use Illuminate\Http\Request;
use App\Widget;
use App\Video;
use App\Event;
use App\SEO;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $current_date = Carbon::now()->format('Y-m-d');

        $data = [];

        $data['widgets'] = Widget::select('code')
            ->where('is_publish', 'yes')
            ->orderBy('id', 'asc')->get();

        $data['videos'] = Video::select('code')
            ->where('is_publish', 'yes')
            ->orderBy('id', 'desc')->get();

        $data['events'] = Event::select('id', 'date_begin', 'date_end', 'city', 'meeting_url', 'club_name', 'tickets_url')
            ->where('date_begin', '>=', $current_date)
            ->where('is_publish', 'yes')
            ->orderBy('date_begin', 'asc')
            ->get();

        $data['links'] = Link::select('id', 'link', 'linktext')
            ->where('is_publish', 'yes')
            ->orderBy('id', 'asc')->get();

        $data['textlinks'] = TextLink::select('id', 'link', 'linktext')
            ->where('is_publish', 'yes')
            ->inRandomOrder()
            ->limit(1)->get();
//            ->orderBy(DB::raw('RAND()'))->get();

        $data['seo'] = SEO::get()->first();



        return view('welcome', $data);
    }

}
