@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Banners 
@endsection

{{-- menu active --}}
@section('bannersCreate')
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
                        <a href="">Banner</a>
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
                    <h4 class="card-title">Create Banner</h4>
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-vertical">Title</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="title" placeholder="Enter Title">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-vertical">Subtitle</label>
                                    <input type="text" id="email-id-vertical" class="form-control" name="subtitle" placeholder="Enter Subtile">
                                    @error('subtitle')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="contact-info-vertical">Short Description</label>
                                    <input type="text" id="contact-info-vertical" class="form-control" name="short_description" placeholder="Enter Short Description">
                                    @error('short_description')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="password-vertical">Background Image</label>
                                    <input type="file" id="password-vertical" class="form-control" name="image">
                                    @error('image')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="button_text">Button Text </label>
                                    <input type="text" id="button_text" class="form-control" name="button_text" placeholder="Enter Button Text">
                                    @error('button_text')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="button_url">Button URL </label>
                                    <input type="text" id="button_url" class="form-control" name="button_url" placeholder="Enter Button URL">
                                    @error('button_url')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="video_url">Button URL </label>
                                    <input type="text" id="video_url" class="form-control" name="video_url" placeholder="Enter Video URL">
                                    @error('video_url')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection