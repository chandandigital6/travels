@extends('layouts.aap')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Counter</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('counter.update', $counter->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Use @method('PUT') if you are updating a resource --}}
                            {{-- @method('PUT') --}}
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $counter->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="number">Number:</label>
                                <input type="text" class="form-control" id="number" name="number" value="{{ $counter->number }}" required>
                            </div>
                            {{-- Other fields can be added here --}}
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
