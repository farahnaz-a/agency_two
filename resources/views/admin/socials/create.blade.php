@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Socials
@endsection

{{-- menu active --}}
@section('socialsCreate')
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
                        <a href="">Social</a>
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
                    <h4 class="card-title">Create Social</h4>
                    @if (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('socials.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="social_icon">Social Icons</label>
                                    <input type="text" id="social_icon" class="form-control" name="social_icon" placeholder="Enter Icon URL">
                                    @error('social_icon')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="social_link">Social Link</label>
                                    <input type="text" id="social_link" class="form-control" name="social_link" placeholder="Enter Social Link">
                                    @error('social_link')
                                    <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                            
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection