
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
  background-color: rgb(57, 64, 70);
}
table
{
  width: 150%;
  float: left;
  margin-left: -20%;
}

th,tr{
  text-align: center;
  border: solid 1px white;
}
.btn-danger
{
    background-color: red !important;
}
th{
    width: 25%;
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

</div>
  
<h2>       </h2>
</div>
<div class="pull-right mb-2">
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">

<p ></p>{{ $message }}</a>
</div>
@endif 
 <h4>   الطلبات القائمة</h4>
<table style="width:100%">
    <tr>
        <th> رقم الطلب </th>
       
      </tr>
    <tr>
      <th>نوعية الشاحنة </th>
     
    </tr>
    <tr>
      <th>نوع البضاعة</th>
      <td>  </td>
    </tr>
    <tr>
      <th>تحديد نطاق النقل</th>
      <td>  </td>
    </tr>
    <tr>
        <th>  موقع الشحن</th>
        <td>  </td>
      </tr>
      <tr>
        <th>  موقع التسليم</th>
        <td>  </td>
      </tr>
      <tr>
        <th> رقم الجوال المستلم </th>
        <td>  </td>
      </tr>
      <tr>
        <th>  ناقل معين</th>
        <td>  </td>
      </tr>
      <tr>
        <th>   جنسية معينة</th>
        <td>  </td>
      </tr>
      <tr>
        <th>   كمية الحمولة</th>
        <td>  </td>
      </tr>
      <tr>
        <th>   وزن الحمولة التقديري بالطن</th>
        <td>  </td>
      </tr>
      <tr>
        <th> اشتراطات التحميل </th>
        <td>  </td>
      </tr>
      <tr>
        <th> الضريبة </th>
        <td>  </td>
      </tr>
      <tr>
      
      </tr>
      <tr>
        <th> السعر </th>
        <td>  </td>
      </tr>
      <tr>
        <th> رمز الشحن </th>
        <td style="background-color: green;">  </td>
      </tr>
      <tr>
        <th > رمز التوصيل </th>
        <td style="background-color: red;">  </td>
      </tr>
      <tr>
        <th > 
            <a href="{{ url ('drivers-data')}}">
                بيانات السائق 

            </a>
            </th>
        <td >  </td>
      </tr>
     
  </table>





</body>
</html>


