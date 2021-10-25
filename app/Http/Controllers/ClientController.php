<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
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
            'clients_url'       => 'required',
            'clients_logo'      => 'required | image',
         ]);

        $client =  Client::create($request->except('_token') + ['created_at' => Carbon::now()]);

        //Upload Images
        $image = $request->file('clients_logo'); 
        $filename = $client->id . '.' .$image->extension('clients_logo');
        $location = public_path('uploads/clients'); 
        $image->move($location, $filename); 
        $client->clients_logo = $filename; 
        $client->save(); 
        
        return redirect('admin/clients')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'clients_url'       => 'required',
            'clients_logo'      => 'image',
         ]);


       if($request->file('clients_logo')){
        $image = $request->file('clients_logo'); 
        $filename = $client->id . '.' .$image->extension('clients_logo');
        $location = public_path('uploads/clients'); 
        $image->move($location, $filename);
         $client->clients_logo = $filename;
       }
       $client->clients_url   = $request->clients_url;
        $client->save();
        return redirect('admin/clients')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
