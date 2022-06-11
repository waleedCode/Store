
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
   <!-- End custom js for this page -->
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
{{-- RTL bootstrap --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
 integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
 <style>
   *
   {
    font-family: 'Cairo', sans-serif;
   }
   h2{
text-align: center;
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
.container
{
}
th,tr{
  text-align: center;
  border: solid 1px white;
}
.pull-right
{
  text-align: right;
    margin-right: 85%;
  }
  .search input {
    width: 300px !important;
    margin-left: 500px!important;
  }
 </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
  <div class="container-scroller" >
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

        <div class="search" >
            <div class="search">
              <input type="search" name="search" id="search" placeholder="اكتب للبحث" class="form-control">
            </div>

        </div>
        

</div>
  
<h2> بيانات الموظف   </h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ url ('create-employee') }}"> <i class="fas fa-plus"></i>اضافة موظف </a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">

<p ></p>{{ $message }}</a>
</div>
@endif
<table>
<tr>
  <thead class="table-dark">
<th class="col-md-1" >رمز العميل</th>
<th class="col-md-2">رقم الهوية  </th>
<th class="col-md-2">الإسم ثلاثي  </th>
<th class="col-md-2">رقم الجوال</th>
<th  class="col-md-1">الجنسية</th>
<th class="col-md-3">البريد الاكتروني</th>
<th width="280px">تعديل</th>
<th width="280px">ايقافات</th>
</thead>


</tr>




<tbody id="Content"> 
  @foreach($employee as $emp)
  <tr>
  <th> {{$emp->emp_code}}  </th>
  <th> {{$emp->identity_number }}   </th>
  <th>{{$emp->emp_name}} </th>
  <th>{{$emp->phone}} </th>
  <th>{{$emp->nationality }}  </th>
  <th> {{$emp->email }} </th>
  <th width="280px">
    <a class="btn btn-primary"  href="{{ url ('edit-employee') }}">تعديل</a>
  </th>
  <th>
    <a class="btn btn-warning" href="{{ url ('employee-tasks') }}">مهام</a>
  
  </th>
  
  
  </tr>
  @endforeach
</tbody>

<script type="text/javascript">
  
  $('#search').on('keyup' , function()
  
  {

    $value = $(this).val();

   $.ajax({
      type:'get',
      url:'{{URL::to('search')}}',
      data:{'search':$value},
     success: function(data)
     {
       console.log(data);
       $('#Content').html(data);
     }
   });

  })

</script>

</body>
</html>