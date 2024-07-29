@extends('components.main',['seos' => $seos])
@section('content')

    <div class="mt-5 pt-5">
        <div class="container py-5">
            <h1 class="mb-4">Thank you</h1>

            <div class="row">
                <div class="col-lg-8">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
