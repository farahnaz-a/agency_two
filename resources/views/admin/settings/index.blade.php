@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Settings 
@endsection

{{-- menu active --}}
@section('settingsIndex')
    active
@endsection

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Settings </span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Settings </h4>
                                @if (session('success'))
                                <br>
                                     <div class="alert alert-success m-0">{{ session('success') }}</div>
                                @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('settings.update', $setting->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="file" id="logo" class="form-control" name="logo">
                                        @error('logo')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <img  class="w-25" src="{{ asset('uploads/settings')}}/{{ $setting->logo }}" alt=""> 
                                    </div>


                                    <div class="form-group">
                                        <label for="favicon">Favicon</label>
                                        <input type="file" id="favicon" class="form-control" name="favicon">
                                        @error('favicon')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <img  class="w-25" src="{{ asset('uploads/settings')}}/{{ $setting->favicon }}" alt=""> 
                                    </div>

                                    <div class="form-group">
                                        <label for="address"> Location</label>
                                        <input type="text" id="address" class="form-control" name="address" value="{{ $setting->address }}">
                                        @error('address')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Email </label>
                                        <input type="text" id="email" class="form-control" name="email" value="{{ $setting->email }}">
                                        @error('email')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone"> Phone </label>
                                        <input type="text" id="phone" class="form-control" name="phone" value="{{ $setting->phone }}">
                                        @error('phone')
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