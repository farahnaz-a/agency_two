<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choose = Choose::first();
        return view('admin.chooses.index', compact('choose'));

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
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function show(Choose $choose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function edit(Choose $choose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choose $choose)
    {
        $request->validate([
            'image'               => 'image',
            'description'         => 'required',
            'block_1_title'       => 'required',
            'block_1_image'       => 'image',
            'block_2_title'       => 'required',
            'block_2_image'       => 'image',
            'block_3_title'       => 'required',
            'block_3_image'       => 'image',
            'block_4_title'       => 'required',
            'block_4_image'       => 'image',
         ]);


       if($request->file('image')){
        $image      = $request->file('image'); 
        $filename   = $choose->id . '.' .$image->extension('image');
        $location   = public_path('uploads/chooses'); 
        $image->move($location, $filename);
         $choose->image = $filename;
       }

       if($request->file('block_1_image')){
        $image      = $request->file('block_1_image'); 
        $filename   = 'block_1_image.' .$image->extension('block_1_image');
        $location   = public_path('uploads/chooses'); 
        $image->move($location, $filename);
         $choose->block_1_image = $filename;
       }

       if($request->file('block_2_image')){
        $image      = $request->file('block_2_image'); 
        $filename   = 'block_2_image.' .$image->extension('block_2_image');
        $location   = public_path('uploads/chooses'); 
        $image->move($location, $filename);
         $choose->block_2_image = $filename;
       }

       if($request->file('block_3_image')){
        $image      = $request->file('block_3_image'); 
        $filename   = 'block_3_image.' .$image->extension('block_3_image');
        $location   = public_path('uploads/chooses'); 
        $image->move($location, $filename);
         $choose->block_3_image = $filename;
       }

       if($request->file('block_4_image')){
        $image      = $request->file('block_4_image'); 
        $filename   = 'block_4_image.' .$image->extension('block_4_image');
        $location   = public_path('uploads/chooses'); 
        $image->move($location, $filename);
         $choose->block_4_image = $filename;
       }
       $choose->description   = $request->description;
       $choose->block_1_title   = $request->block_1_title;
       $choose->block_2_title   = $request->block_2_title;
       $choose->block_3_title   = $request->block_3_title;
       $choose->block_4_title   = $request->block_4_title;
        $choose->save();
        return redirect('admin/chooses')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choose $choose)
    {
        
    }
}
