<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.index', compact('setting'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([

            'logo'      => 'image',
            'favicon'   => 'image',
            'address'   => 'required',
            'email'     => 'required',
            'phone'     => 'required',
        ]);

        if($request->file('logo')){
            $logo       = $request->file('logo'); 
            $filename   = 'logo.' .$logo->extension('logo');
            $location   = public_path('uploads/settings'); 

            $logo->move($location, $filename);
             $setting->logo = $filename;
           }

        if($request->file('favicon')){
            $favicon     = $request->file('favicon'); 
            $filename    = 'favicon.' .$favicon->extension('favicon');
            $location    = public_path('uploads/settings'); 

            $favicon->move($location, $filename);
             $setting->favicon = $filename;
            }
            
            $setting->address = $request->address;
            $setting->email   = $request->email;
            $setting->phone   = $request->phone;
            $setting->save();
            return back()->with('success', 'Updated Successfully');

    }

}
