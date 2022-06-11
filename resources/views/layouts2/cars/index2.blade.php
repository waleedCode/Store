

@extends('layouts2.app')
@section('content')
<h1>CARS CRUD</h1>
<a class="btn btn-link float-end" href="{{route('cars.create')}}"> Create Cars</a>
    @if (session('success'))
    <div class="alert alert-sccess">
        {{ session('success')}}

    </div>
@endif

<table class="">
    <thead>
        <tr></tr>
        <tr>
            <th>Car Id</th>
            <th>Car Id</th>
            <th>Car Id</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($cars as $car )
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td> {{ $car->car_name }}</td>
            <td> {{ $car->car_color }}</td>

            <td>
                
            </td>
        </tr>
   @endforeach
    </tbody>

</table>
@endsection
