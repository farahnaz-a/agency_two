@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Testimonials 
@endsection

{{-- menu active --}}
@section('testimonialsCreate')
    active
@endsection
@section('activeTestimonialsMenu')
    active
@endsection
 

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Testimonial</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Testimonial</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label for="first-name-vertical">Name </label>
                        <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                        @error('image')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror  
                      </div>
                      <div class="form-group">
                        <label for="designation"> Designation </label>
                        <input type="text" id="designation" class="form-control" name="designation" placeholder="Enter Designation">
                        @error('designation')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="message"> Message </label>
                        <textarea name="message" id="message" placeholder="Enter Message" class="form-control"></textarea>
                        @error('message')
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