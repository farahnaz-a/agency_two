<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.services.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'image'             => 'required | image',
         ]);

        $service =  Service::create($request->except('_token') + ['created_at' => Carbon::now()]);

        //Upload Images
        $image = $request->file('image'); 
        $filename = $service->id . '.' .$image->extension('image');
        $location = public_path('uploads/services'); 
        $image->move($location, $filename); 
        $service->image = $filename; 
        $service->save(); 
        
        return redirect('admin/services')->with('success', 'Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title'             => 'required',
            'image'             => 'image',
         ]);


       if($request->file('image')){
        $image = $request->file('image'); 
        $filename = $service->id . '.' .$image->extension('image');
        $location = public_path('uploads/services'); 
        $image->move($location, $filename);
         $service->image = $filename;
       }
       $service->title   = $request->title;
        $service->save();
        return redirect('admin/services')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
