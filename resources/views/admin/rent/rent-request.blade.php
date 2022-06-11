
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
table
{
  width: 150%;
  float: left;
  margin-left: -20%;
}

th{
  border: solid 1px white;
}

.btn-danger
{
  background-color: red!important;
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
      <option> رقم الطلب</option>
      <option>رمز الطالب	</option>
      <option>الإسم ثلاثي	</option>
      <option>رقم الجوال	</option>
      <option>الجنسية</option>
      <option>التاريخ</option>


   
    </select>
  </div>
</div>
  
<h2> بيانات طلب الايجار    </h2>
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
<th class="col-md-1" >رقم  الطلب</th>
<th class="col-md-1">رمز الطالب  </th>
<th class="col-md-2">الإسم ثلاثي  </th>
<th class="col-md-1">رقم الجوال</th>
<th>الجنسية</th>
<th class="col-md-2"> نوع الطلب </th>

<th class="col-md-1">  بيانات الطلب </th>
<th class="col-md-1"> موقع الطلب</th>
<th class="col-md-1">  عدد النوع</th>
<th class="col-md-1">   تاريخ الطلب</th>
<th class="col-md-1">   فتح الطلب</th>

</tr>
<tr>
  <th > 1</th>
<th>   </th>
<th>   </th>
<th> </th>
<th></th>
<th> </th>
<th></th>
<th></th>
<th></th>
<th></th>

<th> 
    <a href="{{url ('rent-pdf')}}">
    <i class="mdi mdi-24px mdi-note-outline"></i>
    </a>

</th>




</tr>

</thead>
<tbody>



</body>
</html>