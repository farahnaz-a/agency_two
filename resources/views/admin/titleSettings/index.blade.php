@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Title Settings
@endsection

{{-- menu active --}}
@section('titleSettingsIndex')
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
                        <a href="">Title Settings</a>
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
                    <h4 class="card-title">Title Setting</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('titleSettings.update', $titleSetting->id) }}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="social_title"> Social Title</label>
                                    <input type="text" id="social_title" class="form-control" name="social_title" value="{{ $titleSetting->social_title }}">
                                    @error('social_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="service_title"> Service Title</label>
                                    <input type="text" id="service_title" class="form-control" name="service_title" value="{{ $titleSetting->service_title }}">
                                    @error('service_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="service_subtitle"> Service Subtitle</label>
                                    <input type="text" id="service_subtitle" class="form-control" name="service_subtitle" value="{{ $titleSetting->service_subtitle }}">
                                    @error('service_subtitle')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="choose_title"> Choose Title</label>
                                    <input type="text" id="choose_title" class="form-control" name="choose_title" value="{{ $titleSetting->choose_title }}">
                                    @error('choose_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="choose_subtitle"> Choose Subtitle</label>
                                    <input type="text" id="choose_subtitle" class="form-control" name="choose_subtitle" value="{{ $titleSetting->choose_subtitle }}">
                                    @error('choose_subtitle')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="testimonial_title"> Testimonial Title</label>
                                    <input type="text" id="testimonial_title" class="form-control" name="testimonial_title" value="{{ $titleSetting->testimonial_title }}">
                                    @error('testimonial_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="testimonial_subtitle"> Testimonial Subtitle</label>
                                    <input type="text" id="testimonial_subtitle" class="form-control" name="testimonial_subtitle" value="{{ $titleSetting->testimonial_subtitle }}">
                                    @error('testimonial_subtitle')
                                    <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="client_title"> Client Title</label>
                                    <input type="text" id="client_title" class="form-control" name="client_title" value="{{ $titleSetting->client_title }}">
                                    @error('client_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="getInTouch_title"> Get In Touch Title</label>
                                    <input type="text" id="getInTouch_title" class="form-control" name="getInTouch_title" value="{{ $titleSetting->getInTouch_title }}">
                                    @error('getInTouch_title')
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