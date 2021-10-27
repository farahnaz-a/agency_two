@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Socials 
@endsection

{{-- menu active --}}
@section('socialsIndex')
    active
@endsection
@section('activeSocialsMenu')
    active
@endsection
 
{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Social</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Social</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('socials.update',$social->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="social_icon">Social URL</label>
                                        <input type="text" id="social_icon" class="form-control" name="social_icon" value="{{ $social->social_icon }}">
                                        @error('social_icon')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="social_link">Social Link</label>
                                        <input type="text" id="social_link" class="form-control" name="social_link" value="{{ $social->social_link }}">
                                        @error('social_link')
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