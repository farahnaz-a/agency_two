<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
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
        $bannerData = Banner::all();
        return view('admin.banners.index', compact('bannerData'));

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
                'title'             => 'required',
                'subtitle'          => 'required',
                'short_description' => 'required',
                'image'             => 'required | image',
                'button_text'       => 'required',
                'button_url'        => 'required',
                'video_url'         => 'required',
        ]);
        
        // $data = new Banner();
        // $data->title                = $request->title;
        // $data->subtitle             = $request->subtitle;
        // $data->short_description    = $request->short_description;
        // $data->button_text          = $request->button_text;
        // $data->button_url           = $request->button_url;
        // $data->video_url            = $request->video_url;

       $banner =  Banner::create($request->except('_token') + ['created_at' => Carbon::now()]);


       //Upload Images
       $image = $request->file('image'); 
       $filename = $banner->id . '.' .$image->extension('image');
       $location = public_path('uploads/banners'); 
       $image->move($location, $filename); 
        $banner->image = $filename; 
        $banner->save(); 
        
        return redirect('admin/banners')->with('success', 'Added Successfully');
       
        
        //Image Save
        // $imageName  = $request->file('image')->getClientOriginalName();
        // $imageStore = $request->file('image')->move(public_path('/uploads/banners'), $imageName);
        // if($imageStore){
        //     $data->image = $imageName;
        //     $data->save();
        //      return redirect('admin/banners')->with('success', 'Added Successfully');
        //     }else{ 
        //     return back()->with('warning', 'Added Failed');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
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
        $request->validate([
            'title'             => 'required',
            'subtitle'          => 'required',
            'short_description' => 'required',
            'image'             => 'image',
            'button_text'       => 'required',
            'button_url'        => 'required',
            'video_url'         => 'required',
    ]);
       if($request->file('image')){
        $image = $request->file('image'); 
        $filename = $banner->id . '.' .$image->extension('image');
        $location = public_path('uploads/banners'); 
        $image->move($location, $filename); 
         $banner->image = $filename; 
       }
       $banner->title                 = $request->title;
        $banner->subtitle             = $request->subtitle;
        $banner->short_description    = $request->short_description;
        $banner->button_text          = $request->button_text;
        $banner->button_url           = $request->button_url;
        $banner->video_url            = $request->video_url;
        $banner->save();
        return redirect('admin/banners')->with('success', 'Update Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back();
    }
}
