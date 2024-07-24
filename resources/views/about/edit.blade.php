@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update about data</div>
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
                        <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if($about->image)
                                    <img src="{{ asset('storage/'.$about->image) }}" alt="Post Image" style="max-width: 200px;">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" value="{{$about->title}}" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="heading">heading:</label>
                                <input type="text" class="form-control" id="heading" value="{{$about->heading}}" name="heading" required>
                            </div>
                            <div class="form-group">

                                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{$about->description}}</textarea>

                            </div>
                            <div class="form-group">
                                <label for="f_1">Field 1:</label>
                                <input type="text" class="form-control" id="f_1" name="f_1" value="{{ $about->f_1 }}">
                                @error('f_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="f_2">Field 2:</label>
                                <input type="text" class="form-control" id="f_2" name="f_2" value="{{ $about->f_2 }}">
                                @error('f_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="f_3">Field 3:</label>
                                <input type="text" class="form-control" id="f_3" name="f_3" value="{{ $about->f_3 }}">
                                @error('f_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="f_4">Field 4:</label>
                                <input type="text" class="form-control" id="f_4" name="f_4" value="{{ $about->f_4 }}">
                                @error('f_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="f_5">Field 5:</label>
                                <input type="text" class="form-control" id="f_5" name="f_5" value="{{ $about->f_5 }}">
                                @error('f_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="f_6">Field 6:</label>
                                <input type="text" class="form-control" id="f_6" name="f_6" value="{{ $about->f_6 }}">
                                @error('f_6')
                                <div class="text-danger">{{ $message }}</div>
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
