<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('admin.abouts.index', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'image',
         ]);


       if($request->file('image')){
        $image      = $request->file('image'); 
        $filename   = $about->id . '.' .$image->extension('image');
        $location   = public_path('uploads/abouts'); 
        $image->move($location, $filename);
         $about->image = $filename;
       }
       $about->title         = $request->title;
       $about->description   = $request->description;
        $about->save();
        return redirect('admin/abouts')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
