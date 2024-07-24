@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">edit </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{route('serviceVideo.update',$serviceVideo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $serviceVideo->title) }}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="youtube_url">YouTube URL</label>
{{--                                <textarea type="text" name="youtube_url_embed" id="youtube_url_embed" cols="30" rows="10" class="textarea">{{$serviceVideo->youtube_url}}</textarea>--}}

                                <input type="url" name="youtube_url" class="form-control @error('youtube_url_embed') is-invalid @enderror" value="{{ old('youtube_url_embed', $serviceVideo->youtube_url_embed) }}">
                                @error('youtube_url_embed')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="service_id">Service</label>
                                <select name="service_id" class="form-control @error('service_id') is-invalid @enderror">
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ $serviceVideo->service_id == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="1" {{ old('status', $serviceVideo->status) == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $serviceVideo->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
