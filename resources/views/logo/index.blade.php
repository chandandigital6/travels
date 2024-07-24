@extends('layouts.aap')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1> Client logo</h1>
                            <a href="{{ route('logo.create') }}" class="btn btn-light">Create logo</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Massage</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($logoData as $logo)
                                    <tr>
                                        <td>{{ $logo->id }}</td>
                                        <td>{{ $logo->title }}</td>
                                        <td>{!! $logo->msg !!}</td>
                                        <td>
                                            @if (is_string($logo->image) && !empty($logo->image))
                                                @php
                                                    $imagePaths = explode(',', $logo->image);
                                                @endphp
                                                @foreach($imagePaths as $imagePath)
                                                    <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $logo->title }}" style="max-width: 100px;">
                                                @endforeach
                                            @endif

                                        </td>
                                        {{--                                        <td><img src="{{ asset('storage/'.$logo->image) }}" alt="{{ $logo->title }}" style="max-width: 100px;"></td>--}}
                                        <td>
                                            <a href="{{ route('logo.edit', $logo->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('logo.delete', $logo->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->
                                            <a href="{{ route('logo.duplicate', $logo->id) }}" class="btn btn-warning">Duplicate</a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No posts found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                        {{$logoData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
