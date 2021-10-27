@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Services 
@endsection

{{-- menu active --}}
@section('servicesIndex')
    active
@endsection

@section('activeServicesMenu')
active
@endsection
 
{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Service</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Service</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('services.update', $service->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" id="title" class="form-control" name="title"
                                            value="{{ $service->title }}">
                                        @error('title')
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
                                            src="{{ asset('uploads/services') }}/{{ $service->image }}" alt="">
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