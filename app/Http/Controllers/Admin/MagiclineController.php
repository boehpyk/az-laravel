<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Magicline;
use Symfony\Component\HttpFoundation\Request;


class MagiclineController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = [];
        $magicline = Magicline::get()->first();
        $data['magicline'] = $magicline;


        return view('admin.magicline.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $content = Magicline::get()->first();

        $content->link          = trim(filter_var($request->input('link'), FILTER_SANITIZE_STRING));
        $content->text          = trim(filter_var($request->input('text'), FILTER_SANITIZE_STRING));
        $content->is_publish    = trim(filter_var($request->input('is_publish'), FILTER_SANITIZE_STRING));
        $content->save();


        return redirect()->route('admin_magicline_edit');
    }

}
