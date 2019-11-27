<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Widget;

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
        $data = [];
        $data['widgets'] = Widget::select('code')
            ->where('is_publish', 'yes')
            ->orderBy('id', 'asc')->get();

        return view('welcome', $data);
    }

}
