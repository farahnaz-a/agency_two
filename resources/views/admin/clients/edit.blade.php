@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Clients 
@endsection

{{-- menu active --}}
@section('clientsIndex')
    active
@endsection

{{-- breadcrumb  --}}
@section('breadcrumbs')
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-start mb-0">Admin Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Client</a>
                    </li>
                    {{-- <li class="breadcrumb-item active">Layout Empty
                    </li> --}}
                </ol>
            </div>
        </div>
    </div>
@endsection
{{-- content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Client</h4>
                    @if (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('clients.update',$client->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-vertical">Client URL</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="clients_url" value="{{ $client->clients_url }}">
                                    @error('clients_url')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                         
                        
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="password-vertical">Background Image</label>
                                    <input type="file" id="password-vertical" class="form-control" name="clients_logo">
                                    @error('clients_logo')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/clients')}}/{{ $client->clients_logo }}" alt=""> 
                                </div>

                            </div>
                           
                            

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection