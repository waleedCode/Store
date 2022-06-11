
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
   <!-- End custom js for this page -->
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
{{-- RTL bootstrap --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
 integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
 <style>
   h2{
    text-align: right;
    padding-top: 20px;
}
.btn-danger
{
  background-color: red !important;
}
img
{
    width: 100%;
    height: 100%;
    
  }

 </style>
</head>
<body>
  <div class="container-scroller">
    @include('admin.css')

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
      <!-- partial:partials/_navbar.html -->
      {{-- @include('admin.header') --}}
      <!-- partial -->
      @include('admin.body')
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.script')
  {{-- <div class="container-fluid page-body-wrapper"> --}}

<div class="container mt-4" style="width: 50%; hieght:50%;" >
<div class="row mt-2">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> بيانات العملاء   </h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('clients.create-user') }}"> اضافة عميل </a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success mt-4">

<p ></p>{{ $message }}</a>
</div>
@endif
<table class="table  table-light ">
<tr>
  <thead class="table-dark">
<th >#</th>
<th>رقم الهوية  </th>
<th>الإسم ثلاثي  </th>
<th>رقم الجوال</th>
<th>الجنسية</th>
<th>البريد الاكتروني</th>
<th>صورة العميل</th>
{{-- <th>صورة الهوية </th> --}}


<th width="280px">الإجراء</th>
</tr>
</thead>
<tbody>
@foreach ($clients as $client)
<tr>
<td>{{ $client->id }}</td>
<td>{{ $client->identity_umber }}</td>
<td>{{ $client->full_name }}</td>
<td>{{ $client->phone }}</td>
<td style="text-align: center">{{ $client->nationality }}</td>
<td>{{ $client->email }}</td>
<td>
  
  <img class="img-fluid" style="text-align:center;"  src="images/clients/{{$client->image}}" width="300px" height="200px;">
</td>
<td>
<form action="{{ route('clients.destroy',$client->id) }}" method="Post">
<a class="btn btn-primary" href="{{ url ('clients.edit',$client->id) }}">تعديل</a>
@csrf
@method('DELETE')
<a type="submit" href="" class="btn btn-danger" >حذف</a>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{!! $clients->links() !!}


</body>
</html>