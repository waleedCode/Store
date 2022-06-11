<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        @include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <!-- End custom js for this page -->

    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title> اضافة عميل</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
 integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
@include('admin.css')

  </head>
  <style>

strong
{
float: right;
}


.form-control{
    text-align: right;
}
button{
    width: auto;
    margin: auto;
}
.mb{
    margin-bottom: 5px;
}
.pull-right
{
    float: right;
    text-align: justify;
}
h2{
    margin-right: 50px;
    float: right;
}
  </style>
  <body  >
    
<div class="container mt-2" dir="rtl" style="padding-top: 40px;">
<div class="row">
<div class="col-lg-12 margin-tb mt-5">
<div class="pull-left mb-2">
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('clients.index') }}"> رجوع</a>
</div>
<h2>اضافة عميل</h2>

</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong class="mb">رقم الهوية :</strong>
<input type="text" name="identity_umber" class="form-control" placeholder="رقم الهوية">
@error('رقم الهوية')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong class="mb">الاسم ثلاثي :</strong>
<input type="text" name="full_name" class="form-control" placeholder="اكتب اسمك ثلاثي">
@error('الاسم')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong class="mb">الجوال:</strong>
    <input type="text" name="phone" class="form-control" placeholder="رقم الجوال">
    @error('الجوال')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong class="mb">الجنسية:</strong>
        <input type="text" name="nationality" class="form-control" placeholder="الجنسية">
        @error('الجنسية')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong class="mb"> البريد الاكتروني:</strong>
            <input type="email" name="email" class="form-control" placeholder="البريد الاكتروني">
            @error('البريد اللاكتروني')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong class="mb">كلمة المرور:</strong>
<input type="password" name="password" class="form-control" placeholder="كلمة المرور">
@error('كلمة المرور')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong class="mb">تأكيد كلمة المرور:</strong>
    <input type="password  " name="confirm_password" class="form-control" placeholder="تأكيد كلمة المرور">
    @error('confirm_password')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
<button type="submit" class="btn btn-primary col-xs-12 col-sm-12 col-md-4 ">ارسال</button>
</div>
</form></div>



  </body>
</html>