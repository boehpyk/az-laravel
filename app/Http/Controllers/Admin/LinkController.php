<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Link;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\StoreLink;
use App\Files\LinkFiles;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $data['links'] = Link::get();

        return view('admin.links.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        return view('admin.links.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $link = new Link();
        $link->title = $request->input('title');

        $link->save();

        return redirect()->route('admin_links_edit', ['link' => $link->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Link $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        $data = [];
        $data['link'] = $link;


        return view('admin.links.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreLink $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLink $request, $id)
    {
        $link = Link::find($id);
        $link->title        = $request->input('title');
        $link->linktext     = $request->input('linktext');
        $link->link         = $request->input('link');
        $link->is_publish   = $request->input('is_publish');
        $link->save();

        $file_handler = new LinkFiles($link, $request);
        $file_handler->save();


        return redirect()->route('admin_links_edit', ['link' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Link $link
     * @return \Illuminate\Http\Response
     * @throws null
     */
    public function destroy(Link $link)
    {
        $file_handler = new LinkFiles($link);
        $file_handler->delete();
        $link->delete();
        return redirect()->route('admin_links_index');
    }
    
}
