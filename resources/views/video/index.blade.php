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
                            <h1> Video</h1>
                            <a href="{{ route('video.create') }}" class="btn btn-light">Create </a>
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
                                    <th>page name</th>
                                    <th>video heading</th>
                                    <th>banner</th>
                                    <th>YouTube URL</th>
{{--                                    <th>State ID</th>--}}

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($videoData as $video)
                                    <tr>
                                        <td>{{ $video->id }}</td>
                                        <td>{{ $video->title }}</td>
                                        <td>{{ $video->sub_title }}</td>
                                        <td><img src="{{ asset('storage/'.$video->image) }}" alt="{{ $video->title }}" style="max-width: 100px;"></td>
                                        <td>
                                            @if ($video->youTubeEmbedUrl)
                                                <iframe width="200" height="113" src="{{ $video->youTubeEmbedUrl }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            @else
                                                No video available
                                            @endif
                                        </td>
{{--                                        <td>{{$video->states->title}}</td>--}}
                                        <td>
                                            <a href="{{ route('video.edit', $video->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('video.delete', $video->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->
                                            <a href="{{ route('video.duplicate', $video->id) }}" class="btn btn-warning">Duplicate</a>

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
                        {{$videoData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
