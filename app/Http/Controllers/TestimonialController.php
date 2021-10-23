<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'name'          => 'required',
            'designation'   => 'required',
            'message'       => 'required',
            'image'         => 'required | image',
    ]);
    
   $banner =  Testimonial::create($request->except('_token') + ['created_at' => Carbon::now()]);


   //Upload Images
   $image = $request->file('image'); 
   $filename = $banner->id . '.' .$image->extension('image');
   $location = public_path('uploads/testimonials'); 
   $image->move($location, $filename); 
    $banner->image = $filename; 
    $banner->save(); 
    
    return redirect('admin/testimonials')->with('success', 'Added Successfully');
   
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'          => 'required',
            'designation'   => 'required',
            'message'       => 'required',
            'image'         => 'image',
         ]);

       if($request->file('image')){
        $image = $request->file('image'); 
        $filename = $testimonial->id . '.' .$image->extension('image');
        $location = public_path('uploads/testimonials'); 
        $image->move($location, $filename);
         $testimonial->image = $filename;
       }
       $testimonial->name          = $request->name;
       $testimonial->designation   = $request->designation;
       $testimonial->message       = $request->message;
        $testimonial->save();
        
        return redirect('admin/testimonials')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back();
    }
}
