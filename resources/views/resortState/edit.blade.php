@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create </div>
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
                        <form action="{{route('resortState.update',$resortState->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$resortState->title}}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="image">Image banner:</label>--}}
                            {{--                                <input type="file" class="form-control" id="banner" name="banner">--}}
                            {{--                                @error('image')--}}
                            {{--                                <div class="text-danger">{{ $message }}</div>--}}
                            {{--                                @enderror--}}
                            {{--                            </div>--}}
                            <div class="form-group">
                                <label for="destination_id">Resort:</label>
                                <select class="form-control" id="resort_id" name="resort_id">
                                    <option value="">Select resort</option>
                                    @foreach($resorts as $resort)
                                        <option value="{{ $resort->id }}" {{ $resortState->resort_id == $resort->id ? 'selected' : '' }}>
                                            {{ $resort->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('resort_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="status">Status:</label>--}}
                            {{--                                <select class="form-control" id="status" name="status">--}}
                            {{--                                    <option value="1">Active</option>--}}
                            {{--                                    <option value="0">Inactive</option>--}}
                            {{--                                </select>--}}
                            {{--                                @error('status')--}}
                            {{--                                <div class="text-danger">{{ $message }}</div>--}}
                            {{--                                @enderror--}}
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
