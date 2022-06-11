
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
  margin-top: -45px;
  margin-left: -100px;
}
#select
{
  height: 35px;
  background-color: rgb(115, 117, 119);
}
table
{
  width: 150%;
  float: left;
  margin-left: -20%;
}

th{
  border: solid 1px white;
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
          <input type="text" class="form-control" placeholder="البحث " >
        </form>
      </li>
    </ul>
 

  <div class="box">
    <select id="select">
      <option> رمز الشركة</option>
      <option> السجل	</option>
      <option>الإسم ثلاثي	</option>
      <option>رقم الجوال	</option>
      <option>الجنسية</option>
      <option>البريد الاكتروني	</option>
      <option>ايقافات
      </option>

   
    </select>
  </div>
</div>
<div class="card-header">
<a href="{{ url ('x1-new-order-file')}}" class="btn btn-success mt-2 float-end" style="margin-bottom: 20px;">اضافة شركة</a>
</div>
<h2>    الشركات المشتركة   </h2>

</div>

</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">

<p ></p>{{ $message }}</a>
</div>
@endif
<table >
<tr>
  <thead >
<th class="col-md-1" >رمز الشركة</th>
<th class="col-md-1"> اسم الشركة  </th>
<th class="col-md-1">رقم الجوال</th>
<th class="col-md-1"> تاريخ انتهاء الاتفاق</th>



</tr>
<tr>
  <th > 1</th>
<th>   </th>
<th>   </th>

<th>  

</th>


</tr>
</thead>
<tbody>



</body>
</html>