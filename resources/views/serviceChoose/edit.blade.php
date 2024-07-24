@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Create </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('serviceChoose.update', $serviceChoose->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
{{--            @method('PUT')--}}

            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $serviceChoose->title) }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Heading -->
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" name="heading" value="{{ old('heading', $serviceChoose->heading) }}">
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
                <input type="text" class="form-control @error('f_title') is-invalid @enderror" id="f_title" name="f_title" value="{{ old('f_title', $serviceChoose->f_title) }}">
                @error('f_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature Message -->
            <div class="form-group">
                <label for="f_msg">Feature Message</label>
                <textarea class="form-control @error('f_msg') is-invalid @enderror" id="f_msg" name="f_msg">{{ old('f_msg', $serviceChoose->f_msg) }}</textarea>
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
                <input type="text" class="form-control @error('f_1_title') is-invalid @enderror" id="f_1_title" name="f_1_title" value="{{ old('f_1_title', $serviceChoose->f_1_title) }}">
                @error('f_1_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 1 Message -->
            <div class="form-group">
                <label for="f_1_msg">Feature 1 Message</label>
                <textarea class="form-control @error('f_1_msg') is-invalid @enderror" id="f_1_msg" name="f_1_msg">{{ old('f_1_msg', $serviceChoose->f_1_msg) }}</textarea>
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
                <input type="text" class="form-control @error('f_2_title') is-invalid @enderror" id="f_2_title" name="f_2_title" value="{{ old('f_2_title', $serviceChoose->f_2_title) }}">
                @error('f_2_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 2 Message -->
            <div class="form-group">
                <label for="f_2_msg">Feature 2 Message</label>
                <textarea class="form-control @error('f_2_msg') is-invalid @enderror" id="f_2_msg" name="f_2_msg">{{ old('f_2_msg', $serviceChoose->f_2_msg) }}</textarea>
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
                <input type="text" class="form-control @error('f_3_title') is-invalid @enderror" id="f_3_title" name="f_3_title" value="{{ old('f_3_title', $serviceChoose->f_3_title) }}">
                @error('f_3_title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Feature 3 Message -->
            <div class="form-group">
                <label for="f_3_msg">Feature 3 Message</label>
                <textarea class="form-control @error('f_3_msg') is-invalid @enderror" id="f_3_msg" name="f_3_msg">{{ old('f_3_msg', $serviceChoose->f_3_msg) }}</textarea>
                @error('f_3_msg')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Service -->
            <div class="form-group">
                <label for="service_id">Service</label>
                <select name="service_id" class="form-control @error('service_id') is-invalid @enderror">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ old('service_id', $serviceChoose->service_id) == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                    @endforeach
                </select>
                @error('service_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="1" {{ old('status', $serviceChoose->status) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $serviceChoose->status) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@endsection
