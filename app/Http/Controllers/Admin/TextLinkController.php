<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TextLink;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\StoreTextLink;
use App\Files\TextLinkFiles;

class TextLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $data['text_links'] = TextLink::get();

        return view('admin.text_links.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        return view('admin.text_links.create', $data);

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
            'linktext' => 'required|max:255',
        ]);

        $text_link = new TextLink();
        $text_link->linktext = $request->input('linktext');

        $text_link->save();

        return redirect()->route('admin_text_links_edit', ['text_link' => $text_link->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TextLink $text_link
     * @return \Illuminate\Http\Response
     */
    public function edit(TextLink $text_link)
    {
        $data = [];
        $data['text_link'] = $text_link;


        return view('admin.text_links.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreTextLink $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTextLink $request, $id)
    {
        $text_link = TextLink::find($id);
        $text_link->linktext     = $request->input('linktext');
        $text_link->link         = $request->input('link');
        $text_link->is_publish   = $request->input('is_publish');
        $text_link->save();


        return redirect()->route('admin_text_links_edit', ['text_link' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TextLink $text_link
     * @return \Illuminate\Http\Response
     * @throws null
     */
    public function destroy(TextLink $text_link)
    {
        $text_link->delete();
        return redirect()->route('admin_text_links_index');
    }
    
}
