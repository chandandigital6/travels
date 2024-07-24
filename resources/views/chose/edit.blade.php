@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>edit</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('chose.update', $chose->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
{{--            @method('PUT')--}}

            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $chose->title) }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Heading -->
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" name="heading" value="{{ old('heading', $chose->heading) }}">
                @error('heading')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature Image -->
            <div class="form-group">
                <label for="f_image">Feature Image</label>
                <input type="file" class="form-control @error('f_image') is-invalid @enderror" id="f_image" name="f_image">
                @error('f_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature Title -->
            <div class="form-group">
                <label for="f_title">Feature Title</label>
                <input type="text" class="form-control @error('f_title') is-invalid @enderror" id="f_title" name="f_title" value="{{ old('f_title', $chose->f_title) }}">
                @error('f_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature Message -->
            <div class="form-group">
                <label for="f_msg">Feature Message</label>
                <textarea class="form-control @error('f_msg') is-invalid @enderror" id="f_msg" name="f_msg">{{ old('f_msg', $chose->f_msg) }}</textarea>
                @error('f_msg')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 1 Image -->
            <div class="form-group">
                <label for="f_1_image">Feature 1 Image</label>
                <input type="file" class="form-control @error('f_1_image') is-invalid @enderror" id="f_1_image" name="f_1_image">
                @error('f_1_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 1 Title -->
            <div class="form-group">
                <label for="f_1_title">Feature 1 Title</label>
                <input type="text" class="form-control @error('f_1_title') is-invalid @enderror" id="f_1_title" name="f_1_title" value="{{ old('f_1_title', $chose->f_1_title) }}">
                @error('f_1_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 1 Message -->
            <div class="form-group">
                <label for="f_1_msg">Feature 1 Message</label>
                <textarea class="form-control @error('f_1_msg') is-invalid @enderror" id="f_1_msg" name="f_1_msg">{{ old('f_1_msg', $chose->f_1_msg) }}</textarea>
                @error('f_1_msg')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 2 Image -->
            <div class="form-group">
                <label for="f_2_image">Feature 2 Image</label>
                <input type="file" class="form-control @error('f_2_image') is-invalid @enderror" id="f_2_image" name="f_2_image">
                @error('f_2_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 2 Title -->
            <div class="form-group">
                <label for="f_2_title">Feature 2 Title</label>
                <input type="text" class="form-control @error('f_2_title') is-invalid @enderror" id="f_2_title" name="f_2_title" value="{{ old('f_2_title', $chose->f_2_title) }}">
                @error('f_2_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 2 Message -->
            <div class="form-group">
                <label for="f_2_msg">Feature 2 Message</label>
                <textarea class="form-control @error('f_2_msg') is-invalid @enderror" id="f_2_msg" name="f_2_msg">{{ old('f_2_msg', $chose->f_2_msg) }}</textarea>
                @error('f_2_msg')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 3 Image -->
            <div class="form-group">
                <label for="f_3_image">Feature 3 Image</label>
                <input type="file" class="form-control @error('f_3_image') is-invalid @enderror" id="f_3_image" name="f_3_image">
                @error('f_3_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 3 Title -->
            <div class="form-group">
                <label for="f_3_title">Feature 3 Title</label>
                <input type="text" class="form-control @error('f_3_title') is-invalid @enderror" id="f_3_title" name="f_3_title" value="{{ old('f_3_title', $chose->f_3_title) }}">
                @error('f_3_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 3 Message -->
            <div class="form-group">
                <label for="f_3_msg">Feature 3 Message</label>
                <textarea class="form-control @error('f_3_msg') is-invalid @enderror" id="f_3_msg" name="f_3_msg">{{ old('f_3_msg', $chose->f_3_msg) }}</textarea>
                @error('f_3_msg')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
