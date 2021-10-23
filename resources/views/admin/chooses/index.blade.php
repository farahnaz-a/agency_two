@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Chooses
@endsection

{{-- menu active --}}
@section('choosesIndex')
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
                        <a href="">Choose</a>
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
                    <h4 class="card-title">Choose</h4>
                    @if (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif

                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('chooses.update', $choose->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" > {{ $choose->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="image">Image</label>
                                    <input type="file" id="image" class="form-control" name="image">
                                    @error('image')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/chooses')}}/{{ $choose->image }}" alt=""> 
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_1_title"> Block 1 Title</label>
                                    <input type="text" id="block_1_title" class="form-control" name="block_1_title" value="{{ $choose->block_1_title }}">
                                    @error('block_1_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_1_image">Block 1 Image</label>
                                    <input type="file" id="block_1_image" class="form-control" name="block_1_image">
                                    @error('block_1_image')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/chooses')}}/{{ $choose->block_1_image }}" alt=""> 
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_2_title"> Block 2 Title</label>
                                    <input type="text" id="block_2_title" class="form-control" name="block_2_title" value="{{ $choose->block_2_title }}">
                                    @error('block_2_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_2_image">Block 2 Image</label>
                                    <input type="file" id="block_2_image" class="form-control" name="block_2_image">
                                    @error('block_2_image')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/chooses')}}/{{ $choose->block_2_image }}" alt=""> 
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_3_title"> Block 3 Title</label>
                                    <input type="text" id="block_3_title" class="form-control" name="block_3_title" value="{{ $choose->block_3_title }}">
                                    @error('block_3_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_3_image">Block 3 Image</label>
                                    <input type="file" id="block_3_image" class="form-control" name="block_3_image">
                                    @error('block_3_image')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/chooses')}}/{{ $choose->block_3_image }}" alt=""> 
                                </div>
                            </div>
                             
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_4_title"> Block 4 Title</label>
                                    <input type="text" id="block_4_title" class="form-control" name="block_4_title" value="{{ $choose->block_4_title }}">
                                    @error('block_4_title')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="block_4_image">Block 4 Image</label>
                                    <input type="file" id="block_4_image" class="form-control" name="block_4_image">
                                    @error('block_4_image')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                                </div>
                                <div class="mb-1">
                                    <img  class="w-25" src="{{ asset('uploads/chooses')}}/{{ $choose->block_4_image }}" alt=""> 
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