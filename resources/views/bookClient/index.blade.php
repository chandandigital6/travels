@extends('layouts.aap')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
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
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h1>BookClientId</h1>
                            {{--                            <a href="{{ route('appointment.create') }}" class="btn btn-light mt-2 mt-md-0">Create new appointment</a>--}}
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
                                    <th>name</th>
                                    <th>number</th>
                                    <th>Client Id</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($bookClientData as $bookClient)
                                    <tr>
                                        <td>{{ $bookClient->id }}</td>
                                        <td>{{ $bookClient->name }}</td>
                                        <td>{{ $bookClient->phone_n }}</td>
                                        <td>{{ $bookClient->client_id }}</td>

                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('bookClient.delete', $bookClient->id) }}" class="btn btn-danger">Delete</a>
                                                <a href="{{ route('bookClient.duplicate', $bookClient->id) }}" class="btn btn-warning">show</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No appointments found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        {{$bookClientData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
