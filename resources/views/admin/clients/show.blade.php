@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Clients 
@endsection

{{-- menu active --}}
@section('clientsIndex')
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
                        <a href="">Client</a>
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
                <h4 class="card-title">Show Client</h4>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            </div>
            <div class="card-body">
                <p class="card-text"> 
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>
                                        Client URL
                                    </th>
                                    <td>
                                        {{ $client->clients_url }}
                                    </td>
                                </tr>                                
                                                                
                                                               
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <td>
                                        <img width="100px" src="{{ asset('uploads/clients')}}/{{ $client->clients_logo }}" alt="">
                                    </td>
                                </tr>                                
                                                                
                                                               
                                                                
                            </tbody>
                        </table>
                        <a class="btn btn-primary mt-1" href="{{ route('clients.index') }}">Return Back</a>                      
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection