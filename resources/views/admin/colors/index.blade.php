@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Colors 
@endsection

{{-- menu active --}}
@section('colorsIndex')
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
                        <a href="">Color</a>
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
                    <h4 class="card-title">Color</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('colors.update', $color->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="theme_color">Theme Color</label>
                                    <input type="color" id="theme_color" class="form-control" name="theme_color" value="{{ $color->theme_color }}">
                                    @error('theme_color')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="getInTouch_background_color">Get In Touch Background Color</label>
                                    <input type="color" id="getInTouch_background_color" class="form-control" name="getInTouch_background_color" value="{{ $color->getInTouch_background_color }}">
                                    @error('getInTouch_background_color')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="footer_background_color">Footer Background Color</label>
                                    <input type="color" id="footer_background_color" class="form-control" name="footer_background_color" value="{{ $color->footer_background_color }}">
                                    @error('footer_background_color')
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