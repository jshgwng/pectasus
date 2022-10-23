@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($profiles as $profile)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h2>{{ $profile->name }} | {{ $profile->caseRef }}</h2>
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{ url('/profiles/' . $profile->id) }}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="">{{ $profile->station }}</p>
                            <p class="">{{ $profile->offence }}</p>
                            <p class="">{{ $profile->briefOnCase }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-2">
            <p>
                {{ $profiles->links() }}
            </p>
        </div>
    </div>
@endsection
