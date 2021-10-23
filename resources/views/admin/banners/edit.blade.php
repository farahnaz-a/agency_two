@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Banners 
@endsection

{{-- menu active --}}
@section('bannersIndex')
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
                    <h4 class="card-title">Edit Banner</h4>
                    @if (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('banners.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-vertical">Title</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="title" value="{{ $banner->title }}" >
                                    @error('title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-vertical">Subtitle</label>
                                    <input type="text" id="email-id-vertical" class="form-control" name="subtitle" value="{{ $banner->subtitle }}" >
                                    @error('subtitle')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="short_description">Short Description</label>
                                    <textarea class="form-control" name="short_description" id="short_description"> {{ $banner->short_description }}</textarea>
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
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/banners')}}/{{ $banner->image }}" alt=""> 
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="button_text">Button Text </label>
                                    <input type="text" id="button_text" class="form-control" name="button_text" value="{{ $banner->button_text }}" >
                                    @error('button_text')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="button_url">Button URL </label>
                                    <input type="text" id="button_url" class="form-control" name="button_url" value="{{ $banner->button_url }}" >
                                    @error('button_url')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="video_url">Button URL </label>
                                    <input type="text" id="video_url" class="form-control" name="video_url" value="{{ $banner->video_url }}" >
                                    @error('video_url')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
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