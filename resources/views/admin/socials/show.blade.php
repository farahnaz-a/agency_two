@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Socials 
@endsection

{{-- menu active --}}
@section('socialsIndex')
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
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Show Social</h4>
            </div>
            <div class="card-body">
                <p class="card-text"> 
                    <div class="table-responsive">
                        <table class="table table-bordered">
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
                        <a class="btn btn-primary mt-1" href="{{ route('socials.index') }}">Return Back</a>                      
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection