@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Testimonials 
@endsection

{{-- menu active --}}
@section('testimonialsIndex')
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
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Testimonial</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Testimonial</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('testimonials.update',$testimonial->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="first-name-vertical">Name </label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{ $testimonial->name }}" >
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
                                    <div class="mb-1">
                                        <img class="w-25"
                                            src="{{ asset('uploads/testimonials') }}/{{ $testimonial->image }}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="designation">Designation </label>
                                        <input type="text" id="designation" class="form-control" name="designation" value="{{ $testimonial->designation }}" >
                                        @error('designation')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="message"> Message </label>
                                        <textarea name="message" id="message" class="form-control" name="message"> {{ $testimonial->message }} </textarea>
                                        @error('message')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                    
                                    <button type="submit" class="btn btn-admin mt-2">Update</button>
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