@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Abouts
@endsection

{{-- menu active --}}
@section('aboutsIndex')
    active
@endsection


{{-- content --}}
@section('content')
    <section class="banner-main-section py-5" id="main">
        <div class="row">
            <div class="col-12">
                <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> About </span></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">About </h4>
                                    @if (session('success'))
                                    <br>
                                         <div class="alert alert-success m-0">{{ session('success') }}</div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('abouts.update', $about->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control" name="title"
                                                value="{{ $about->title }}">
                                            @error('title')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input id="description" type="hidden" name="description"
                                                value="{{ $about->description }}">
                                            <trix-editor input="description"></trix-editor>
                                            @error('description')
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
                                                src="{{ asset('uploads/abouts') }}/{{ $about->image }}" alt="">
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
