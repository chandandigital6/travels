@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Create logo</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('logo.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $logo->title }}">
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" cols="30" rows="10" class="form-control textarea">{{ $logo->msg }}</textarea>
            </div>
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" class="form-control file" id="image" name="image[]" multiple>
                @if($logo->image)
                    <div class="form-group">
                        <label>Current Images</label>
                        <div class="row">
{{--                            @foreach(explode(',', $logo->image) as $image)--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <img src="{{ asset('storage/' . $image) }}" class="img-fluid mb-2" alt="Current Image" width="100">--}}
{{--                                    <form action="{{ route('remove.image') }}" method="POST" style="display: inline;">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <input type="hidden" name="image" value="{{ $image }}">--}}
{{--                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
                        </div>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@endsection
