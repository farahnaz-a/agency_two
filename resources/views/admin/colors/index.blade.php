@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Colors 
@endsection

{{-- menu active --}}
@section('colorsIndex')
    active
@endsection
 

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Color Settings </span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Color Settings </h4>
                                @if (session('success'))
                                <br>
                                     <div class="alert alert-success m-0">{{ session('success') }}</div>
                                @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('colors.update', $color->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="theme_color">Theme Color</label>
                                        <input type="color" id="theme_color" class="form-control" name="theme_color" value="{{ $color->theme_color }}">
                                        @error('theme_color')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                     

                                    <div class="form-group">
                                        <label for="getInTouch_background_color">Get In Touch Background Color</label>
                                        <input type="color" id="getInTouch_background_color" class="form-control" name="getInTouch_background_color" value="{{ $color->getInTouch_background_color }}">
                                        @error('getInTouch_background_color')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                     

                                    <div class="form-group">
                                        <label for="footer_background_color">Footer Background Color</label>
                                        <input type="color" id="footer_background_color" class="form-control" name="footer_background_color" value="{{ $color->footer_background_color }}">
                                        @error('footer_background_color')
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