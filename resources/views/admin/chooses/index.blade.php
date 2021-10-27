@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Chooses
@endsection

{{-- menu active --}}
@section('choosesIndex')
    active
@endsection

{{-- content --}}
@section('content')
    <section class="banner-main-section py-5" id="main">
        <div class="row">
            <div class="col-12">
                <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Choose </span></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Choose </h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('chooses.update', $choose->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description"
                                                id="description"> {{ $choose->description }}</textarea>
                                            @error('description')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description_2">Description_2</label>
                                            <textarea class="form-control" name="description_2"
                                                id="description_2"> {{ $choose->description_2 }}</textarea>
                                            @error('description_2')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" id="image" class="form-control" name="image">
                                            @error('image')
                                            <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <img class="w-25"
                                            src="{{ asset('uploads/chooses') }}/{{ $choose->image }}" alt="image not found">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="block_1_title"> Block 1 Title</label>
                                            <input type="text" id="block_1_title" class="form-control" name="block_1_title"
                                                value="{{ $choose->block_1_title }}">
                                            @error('block_1_title')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="block_1_image">Block 1 Image</label>
                                            <input type="file" id="block_1_image" class="form-control" name="block_1_image">
                                            @error('block_1_image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <img width="100px" src="{{ asset('uploads/chooses') }}/{{ $choose->block_1_image }}"
                                                alt="image not found">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="block_2_title"> Block 2 Title</label>
                                            <input type="text" id="block_2_title" class="form-control" name="block_2_title"
                                                value="{{ $choose->block_2_title }}">
                                            @error('block_2_title')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="block_2_image">Block 2 Image</label>
                                            <input type="file" id="block_2_image" class="form-control" name="block_2_image">
                                            @error('block_2_image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <img width="100px" src="{{ asset('uploads/chooses') }}/{{ $choose->block_2_image }}"
                                                alt="image not found">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="block_3_title"> Block 3 Title</label>
                                            <input type="text" id="block_3_title" class="form-control" name="block_3_title"
                                                value="{{ $choose->block_3_title }}">
                                            @error('block_3_title')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="block_3_image">Block 3 Image</label>
                                            <input type="file" id="block_3_image" class="form-control" name="block_3_image">
                                            @error('block_3_image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <img width="100px" src="{{ asset('uploads/chooses') }}/{{ $choose->block_3_image }}"
                                                alt="image not found">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="block_4_title"> Block 4 Title</label>
                                            <input type="text" id="block_4_title" class="form-control" name="block_4_title"
                                                value="{{ $choose->block_4_title }}">
                                            @error('block_4_title')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="block_4_image">Block 4 Image</label>
                                            <input type="file" id="block_4_image" class="form-control" name="block_4_image">
                                            @error('block_4_image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <img width="100px" src="{{ asset('uploads/chooses') }}/{{ $choose->block_4_image }}"
                                                alt="image not found">
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
