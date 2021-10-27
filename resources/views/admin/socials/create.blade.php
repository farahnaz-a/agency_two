@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Socials
@endsection

{{-- menu active --}}
@section('socialsCreate')
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
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Social</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Social</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('socials.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label class="form-label" for="social_icon">Social Icons</label>
                        <input type="text" id="social_icon" class="form-control" name="social_icon" placeholder="Enter Icon URL">
                        @error('social_icon')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                    </div>
                      <div class="form-group">
                        <label class="form-label" for="social_link">Social Link</label>
                        <input type="text" id="social_link" class="form-control" name="social_link" placeholder="Enter Social Link">
                        @error('social_link')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                        
                      <button type="submit" class="btn btn-admin">Submit</button>
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