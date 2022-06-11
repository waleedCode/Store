
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
  background-color: rgb(17, 14, 14) !important;
}
.box
{
  margin-top: -50px;
  margin-left: -100px;
}
#select
{
  background-color: rgb(57, 64, 70);
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
<div class="row mt-5">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
  <div class="col-md-3">
    <ul class="navbar-nav w-100">
      <li class="nav-item w-100">
        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
          <input type="text" class="form-control" placeholder="البحث ">
        </form>
      </li>
    </ul>
 

  <div class="box">
    <select id="select">
      <option> بالاسم</option>
      <option>النوع</option>
   
    </select>
  </div>
</div>
  
<h2> بيانات الناقليين   </h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ url('create-trans-company') }}"> اضافة ناقل </a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">

<p ></p>{{ $message }}</a>
</div>
@endif
<table class="table  table-light  ">
<tr>
  <thead class="table-dark">
<th >#</th>
<th>رقم الهوية  </th>
<th>الإسم ثلاثي  </th>
<th>رقم الجوال</th>
<th>الجنسية</th>
<th>صورة الرخصة</th>
<th>البريد الاكتروني</th>

<th width="280px">تعديل</th>
<th width="280px">حذف</th>
<th width="280px">ايقاف العميل</th>


</tr>
</thead>
<tbody>
{{-- @foreach ($clients as $client)
<tr>
<td>
  {{ $client->id }}
</td>
<td>{{ $client->identity_umber }}</td>
<td>{{ $client->full_name }}</td>
<td>{{ $client->phone }}</td>
<td>{{ $client->nationality }}</td>
<td>{{ $client->email }}</td> --}}
{{-- <td>
  
  <img  src="images/clients{{$client->image}}" >
</td> --}}

<td>
  {{-- <img  src="car.jpg"  width="2880px;" height="1800px;" alt="الصورة"> --}}
  {{-- {{$client->image}} --}}

  {{-- <img class="img_size" src="/product/1653328713.png" > --}}

  </td>

{{-- <td>
<form action="{{ route('clients.destroy',$client->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">تعديل</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" >حذف</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{!! $clients->links() !!} --}}


</body>
</html>