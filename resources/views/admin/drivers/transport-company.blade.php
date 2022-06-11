
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
.table
{
  width: 100%;
}

th{
  border: solid 1px white;
}
.container-fluid
{
    width: 100% !important;

}
#size
{
    width: 150vh;
    float: left;
    margin-left: -20%;
}
tr
{
    text-align: center;
}
#add-company
{
    float: left;

}

.btn-danger
{
  background-color: red !important;
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

<div class="container mt-4"  >
    
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
      <option>رقم السجل	</option>
      <option> الاسم التجاري	</option>
      <option>الرقم الضريبي</option>
      <option> اسم البنك</option>
      <option>رقم حساب الايبان IB</option>
      

   
    </select>
  </div>
</div>
<div class="pull-right mb-2">
    <a id="add-company" class="btn btn-success" href="{{ url('create-transport-company') }}"> <i class="fas fa-plus"></i>اضافة شركة نقل  </a>
    </div>
  
<h2> بيانات شركات النقليات   </h2>
</div>

</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">

<p ></p>{{ $message }}</a>
</div>
@endif
<div class="container-fluid">
<table id="size">
<tr>
  <thead class="table-dark">
<th  class="col-md-1">رمز الشركة</th>
<th class="col-md-2"> رقم السجل  </th>
<th class="col-md-2"> الاسم التجاري  </th>
<th class="col-md-2"> الرقم الضريبي</th>
<th class="col-md-1">اسم البنك</th>
<th class="col-md-1">  رقم الترخيص </th>
<th class="col-md-4"> رقم الايبان IBAN</th>

<th width="80px">تعديل</th>
<th width="80px">حذف</th>

</tr>
<th> {{ $waleed }} </th>


</tr>
</tr>
</thead>
<tbody>

</tbody>
</table>
</div>

</body>
</html>