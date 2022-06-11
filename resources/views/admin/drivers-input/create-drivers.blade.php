{{-- @extends('layout.layout') --}}

{{-- @section('content') --}}
    <h1>Add driver</h1>
    <hr>
     <form action="/drivers" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Task Title</label>
        <input type="text" class="form-control" id="taskTitle"  name="name">
      </div>
      <div class="form-group">
        <label for="identity_number">Task Description</label>
        <input type="text" class="form-control" id="taskDescription" name="identity_number">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
{{-- @endsection --}}