{{-- @extends('layout.layout')

@section('content') --}}
            <h1>Showing Task {{ $driver->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $driver->name }}<br>
            <strong>Description:</strong> {{ $driver->identity_number }}
        </p>
    </div>
{{-- @endsection --}}