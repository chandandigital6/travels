@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>ServiceGallery</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('gallery.update',$gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $gallery->title) }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" cols="30" rows="10" class="textarea">{{$gallery->msg}}</textarea>

                {{--                <input type="text" name="msg" class="form-control @error('msg') is-invalid @enderror" value="{{ old('msg', $gallery->msg) }}">--}}
                @error('msg')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Images</label>
                <input type="file" name="image[]" class="form-control @error('image') is-invalid @enderror" multiple>
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                @if($gallery->image)
                    <div class="form-group">
                        <label>Current Images</label>
                        <div class="row">
                            @foreach(explode(',', $gallery->image) as $image)
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/' . $image) }}" class="img-fluid mb-2" alt="Current Image" width="100">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label for="service_id">Service</label>
                <select name="service_id" class="form-control @error('service_id') is-invalid @enderror">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ $gallery->service_id == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                    @endforeach
                </select>
                @error('service_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="1" {{ old('status', $gallery->status) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $gallery->status) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
