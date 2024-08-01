@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit  </div>
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
                        <form action="{{route('video.update',$video->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                @if($video)
                                    <img src="{{asset('storage/'.$video->image)}}" alt="" width="100">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="youTube_url">YouTube URL</label>
                                <input type="url" class="form-control" id="youTube_url" name="youTube_url" value="{{ $video->youTube_url }}">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="state_id">State</label>--}}
{{--                                <select class="form-control" id="state_id" name="state_id">--}}
{{--                                    <option value="">Select a state</option>--}}
{{--                                    @foreach($states as $state)--}}
{{--                                        <option value="{{ $state->id }}" {{ $video->state_id == $state->id ? 'selected' : '' }}>{{ $state->title }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
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
