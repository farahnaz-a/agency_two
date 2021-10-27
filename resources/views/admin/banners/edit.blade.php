@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Banners
@endsection

{{-- Menu Active --}}
@section('bannersIndex')
    active
@endsection
@section('activeBannersMenu')
    active
@endsection

{{-- content --}}
@section('content')
    <section class="banner-main-section py-5" id="main">
        <div class="row">
            <div class="col-12">
                <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Banner</span></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Banner</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('banners.update', $banner->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control" name="title"
                                                value="{{ $banner->title }}">
                                            @error('title')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle">Subtitle</label>
                                            <input type="text" id="subtitle" class="form-control" name="subtitle"
                                                value="{{ $banner->subtitle }}">
                                            @error('subtitle')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <textarea class="form-control" name="short_description"
                                                id="short_description">{{ $banner->short_description }}</textarea>
                                            @error('short_description')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Background Image</label>
                                            <input type="file" id="image" class="form-control" name="image">
                                            @error('image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <img class="w-25"
                                                src="{{ asset('uploads/banners') }}/{{ $banner->image }}" alt="">
                                        </div>
                                        <div class="form-group">
                                            <label for="button_text">Button Text</label>
                                            <input type="text" id="button_text" class="form-control" name="button_text"
                                                value="{{ $banner->button_text }}">
                                            @error('button_text')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="button_url">Button URL </label>
                                            <input type="text" id="button_url" class="form-control" name="button_url"
                                                value="{{ $banner->button_url }}">
                                            @error('button_url')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="video_url">Video URL </label>
                                            <input type="text" id="video_url" class="form-control" name="video_url"
                                                value="{{ $banner->video_url }}">
                                            @error('video_url')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-admin">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
