@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Settings 
@endsection

{{-- menu active --}}
@section('settingsIndex')
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
                        <a href="">Setting</a>
                    </li>
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
                    <h4 class="card-title">Setting</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                    
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="logo">Logo</label>
                                    <input type="file" id="logo" class="form-control" name="logo">
                                    @error('logo')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/settings')}}/{{ $setting->logo }}" alt=""> 
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="favicon">Favicon</label>
                                    <input type="file" id="favicon" class="form-control" name="favicon">
                                    @error('favicon')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/settings')}}/{{ $setting->favicon }}" alt=""> 
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="address"> Location</label>
                                    <input type="text" id="address" class="form-control" name="address" value="{{ $setting->address }}">
                                    @error('address')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email"> Email </label>
                                    <input type="text" id="email" class="form-control" name="email" value="{{ $setting->email }}">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="phone"> Phone </label>
                                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $setting->phone }}">
                                    @error('phone')
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