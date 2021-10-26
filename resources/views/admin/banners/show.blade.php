@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Banners
@endsection

{{-- Menu Active --}}
@section('bannersIndex')
    active
@endsection
@section('activeMenu')
    active
@endsection

{{-- content --}}
@section('content')
    <section class="banner-main-section py-5 all-pages-input" id="main">
        <div class="row">
            <div class="col-12">
                <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Show Banner</span></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Banner </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table  class="table table-bordered">
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                Title
                                                            </th>
                                                            <td>
                                                                {{ $banner->title }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Subtitle
                                                            </th>
                                                            <td>
                                                                {{ $banner->subtitle }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Short Description
                                                            </th>
                                                            <td>
                                                                {{ $banner->short_description }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Image
                                                            </th>
                                                            <td>
                                                                <img width="100px" src="{{ asset('uploads/banners') }}/{{ $banner->image }}"
                                                                    alt="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Button Text
                                                            </th>
                                                            <td>
                                                                {{ $banner->button_text }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Button URL
                                                            </th>
                                                            <td>
                                                                {{ $banner->button_url }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Video URL
                                                            </th>
                                                            <td>
                                                                {{ $banner->video_url }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a class="btn btn-primary mt-1" href="{{ route('banners.index') }}">Return Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
