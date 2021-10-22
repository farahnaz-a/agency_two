<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banners.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'title'=> 'required',
                'subtitle'=> 'required',
                'short_description'=> 'required',
                'image'=> 'required | image',
                'button_text'=> 'required',
                'button_url'=> 'required',
                'video_url'=> 'required',
        ]);
        $imageName = $request->file('image')->getClientOriginalName();

        $data = new Banner();
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->short_description = $request->short_description;
        $data->image = $imageName;
        $data->button_text = $request->button_text;
        $data->button_url = $request->button_url;
        $data->video_url = $request->video_url;
        $imageStore = $request->file('image')->move(public_path('/uploads/banners'), $imageName);
        if($imageStore){
            $data->save();
             return back()->with('success', 'added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
