@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Testimonials 
@endsection

{{-- menu active --}}
@section('testimonialsIndex')
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
                        <a href="">Testimonial</a>
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
                    <h4 class="card-title">Edit Testimonial</h4>
                    @if (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('testimonials.update',$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-vertical">Name </label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{ $testimonial->name }}" >
                                    @error('name')
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
                                    <img  class="w-25" src="{{ asset('uploads/testimonials')}}/{{ $testimonial->image }}" alt=""> 
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="designation">Designation </label>
                                    <input type="text" id="designation" class="form-control" name="designation" value="{{ $testimonial->designation }}" >
                                    @error('designation')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="message"> Message </label>
                                    <textarea name="message" id="message" placeholder="Enter Message" class="form-control" name="message"> {{ $testimonial->message }} </textarea>
                                    @error('message')
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