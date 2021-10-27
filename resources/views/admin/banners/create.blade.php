@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Banners 
@endsection

{{-- menu active --}}
@section('bannersCreate')
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
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Banner</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Banner</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label  for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" placeholder="Enter Title">
                        @error('title')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" id="subtitle" class="form-control" name="subtitle" placeholder="Enter Subtile">
                        @error('subtitle')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror   
                      </div>
                      <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea class="form-control" name="short_description" id="short_description" placeholder="Enter Short Description"></textarea>
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
                      <div class="form-group">
                        <label  for="button_text">Button Text</label>
                        <input type="text" id="button_text" class="form-control" name="button_text" placeholder="Enter Button Text">
                        @error('button_text')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="button_url">Button URL </label>
                        <input type="text" id="button_url" class="form-control" name="button_url" placeholder="Enter Button URL">
                        @error('button_url')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                      </div>
                      <div class="form-group">
                        <label for="video_url">Video URL </label>
                        <input type="text" id="video_url" class="form-control" name="video_url" placeholder="Enter Video URL">
                        @error('video_url')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror  
                      </div>
                      <button type="submit" class="btn btn-admin">Submit</button>
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