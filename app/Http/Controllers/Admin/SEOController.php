<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SEO;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;


class SEOController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = [];
        $seo = SEO::get()->first();
        $data['seo'] = $seo;


        return view('admin.seo.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $seo = SEO::get()->first();

        $seo->title         = $seo->keywords      = trim(filter_var($request->input('title'), FILTER_SANITIZE_STRING));
        $seo->description   = trim(filter_var($request->input('description'), FILTER_SANITIZE_STRING));
        $seo->keywords      = trim(filter_var($request->input('keywords'), FILTER_SANITIZE_STRING));
        $seo->save();


        return redirect()->route('admin_seo_edit');
    }

}
