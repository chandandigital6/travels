@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>update plans</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('plan.update',$plan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
                @if($plan->image)
                    <img src="{{asset('storage/'.$plan->image)}}" alt="" width="200px">
                @endif
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="price">Price</label>--}}
{{--                <input type="text" class="form-control" name="price" value="{{$plan->price}}" id="price" required>--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{$plan->title}}" id="title" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="msg">{{$plan->msg}}</textarea>

            </div>
{{--            <div class="form-group">--}}
{{--                <label for="fe_2">Feature 2</label>--}}
{{--                <input type="text" class="form-control" value="{{$plan->fe_2}}" name="fe_2" id="fe_2">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="fe_3">Feature 3</label>--}}
{{--                <input type="text" class="form-control" value="{{$plan->fe_3}}" name="fe_3" id="fe_3">--}}
{{--            </div>--}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
