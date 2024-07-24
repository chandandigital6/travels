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

        <form action="{{ route('logo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" cols="30" rows="10" class="textarea form-control"></textarea>
{{--                <input type="text" class="form-control" id="msg" name="msg" value="{{ old('msg') }}">--}}
            </div>
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" class="form-control file" id="image" name="image[]" multiple>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
