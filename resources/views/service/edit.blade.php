@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Create Service</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $service->title }}">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" name="heading" class="form-control" id="heading" value="{{ $service->heading }}">
                @error('heading')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{$service->description}}</textarea>

            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file" id="image">
                @if($service->image)
                    <img src="{{asset('storage/'.$service->image)}}" alt="" width="200px">
                @else
                    no image
                @endif
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>


            <div class="form-group">
                <label for="image">ServiceImage</label>
                <input type="file" name="service_image" class="form-control-file" id="service_image">
                @if($service->image)
                    <img src="{{asset('storage/'.$service->service_image)}}" alt="" width="200px">
                @else
                    no image
                @endif
{{--                @error('image')--}}
{{--                @error('image')--}}
{{--                <small class="text-danger">{{ $message }}</small>--}}
{{--                @enderror--}}
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="1" {{ old('status', $service->status) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $service->status) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Update Service</button>
        </form>
    </div>


@endsection
