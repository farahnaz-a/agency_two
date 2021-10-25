<?php

namespace App\Http\Controllers;

use App\Models\TitleSetting;
use Illuminate\Http\Request;

class TitleSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $titleSetting = TitleSetting::first();
        return view('admin.titleSettings.index', compact('titleSetting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function show(TitleSetting $titleSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(TitleSetting $titleSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitleSetting $titleSetting)
    {
        $request->validate([
                'social_title'          => 'required',
                'service_title'         => 'required',
                'service_subtitle'      => 'required',
                'choose_title'          => 'required',
                'choose_subtitle'       => 'required',
                'testimonial_title'     => 'required',
                'testimonial_subtitle'  => 'required',
                'client_title'          => 'required',
                'getInTouch_title'      => 'required',
        ]);
        $titleSetting->social_title         = $request->social_title;
        $titleSetting->service_title        = $request->service_title;
        $titleSetting->service_subtitle     = $request->service_subtitle;
        $titleSetting->choose_title         = $request->choose_title;
        $titleSetting->choose_subtitle      = $request->choose_subtitle;
        $titleSetting->testimonial_title    = $request->testimonial_title;
        $titleSetting->testimonial_subtitle = $request->testimonial_subtitle;
        $titleSetting->client_title         = $request->client_title;
        $titleSetting->getInTouch_title     = $request->getInTouch_title;
        $titleSetting->save();
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitleSetting $titleSetting)
    {
        //
    }
}
