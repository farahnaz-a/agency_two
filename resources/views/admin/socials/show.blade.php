@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Socials 
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
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Show Social</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Social </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            Social Icon
                                                        </th>
                                                        <td>
                                                            {!! $social->social_icon !!}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Social Link
                                                        </th>
                                                        <td>
                                                            {{ $social->social_link }}
                                                        </td>
                                                    </tr>                                    
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1" href="{{ route('socials.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1" href="{{ route('socials.edit', $social->id) }}">Edit</a>

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