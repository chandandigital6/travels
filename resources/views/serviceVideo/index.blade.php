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
                            <h1>Service Video</h1>
                            <a href="{{ route('serviceVideo.create') }}" class="btn btn-light">Create </a>
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
                                <tr><th>ID</th>
                                    <th>Title</th>
                                    <th>YouTube Embed Code</th>
                                    <th>serviceName</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($serviceVideoData as $serviceVideo)
                                    <tr>
                                        <td>{{ $serviceVideo->id }}</td>
                                        <td>{{ $serviceVideo->title }}</td>
{{--                                        <td>--}}
{{--                                            <iframe width="560" height="315" src="{{ $serviceVideo->youtube_url_embed }}" frameborder="0" allowfullscreen></iframe>--}}

{{--                                        </td>--}}
                                        <td>
                                            <!-- Try embedding a different video to check if embedding is allowed -->
{{--                                            <iframe width="668" height="376" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Sample Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>--}}

                                            <!-- Uncomment and use this section if embedding is allowed -->
{{--                                            @if($serviceVideo->youtube_url_embed)--}}
                                                <iframe width="668" height="376" src="{{ $serviceVideo->youtube_url_embed }}" title="Service Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
{{--                                            @endif--}}
                                        </td>

                                        <td>{{$serviceVideo->service->title}}</td>
                                        <td>{{$serviceVideo->status ==1 ? 'active': 'inactive'}}</td>
                                        <td>
                                            <a href="{{ route('serviceVideo.edit', $serviceVideo->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('serviceVideo.delete', $serviceVideo->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->
                                            <a href="{{ route('serviceVideo.duplicate', $serviceVideo->id) }}" class="btn btn-warning">Duplicate</a>

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
                        {{$serviceVideoData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
