@extends('layouts.app')

@section('content')
<div class="container">
    <form action = "/m" enctype = "multipart/form-data" method = "get">
        @csrf
        <div class = "row">
            <div class = "col-6 offset-3">
                <div class="row mb-3 mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg flex pl-0" >
                    <label for="title" class="col-md-2 col-form-label text-md-end text-white">{{ __('Mod Title') }}</label>
                    <div class="col-md-8">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class = "row">
        <div class = "col-6 offset-3">
                <div class="row mb-3 mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg flex pl-0" >
            <label for="image" class="col-md-2 col-form-label text-md-end text-white">{{ __('Mod Image') }}</label>
            <div class = "col-md-8">
            <input id = "image" type = "file" name = "image" class = "form-control-file pt-1">
            @error('image')
                    <strong>{{ $message }}</strong>
            @enderror
        </div>
</div>
</div>
</div>
<div class = "row">
            <div class = "col-6 offset-3">
                <div class="row mb-3 mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg flex pl-0" >
                    <label for="description" class="col-md-2 col-form-label text-md-end text-white">{{ __('Mod description') }}</label>
                    <div class="col-md-8">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "col-6 offset-3">
                <div class="row mb-3 mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg flex pl-0" >
                    <label for="url" class="col-md-2 col-form-label text-md-end text-white">{{ __('Mod file url') }}</label>
                    <div class="col-md-8">
                        <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autocomplete="url" autofocus>
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
<div class = "row">
        <div class = "col-6 offset-3">
                <div class="row mb-3 mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg flex pl-0" >
                <button class = "btn btn-primary">Post New Mod</button> 
            </div>
</div>
</div>
</div>
    </form>
</div>

@endsection
