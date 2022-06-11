<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Company Form - Laravel 8 CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  </head>
  <body  >

<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>اضافة عميل</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('clients.index') }}"> رجوع</a>
</div>
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
<strong>:رقم الهوية</strong>
<input type="text" name="identity_umber" class="form-control" placeholder="رقم الهوية">
@error('رقم الهوية')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>الاسم ثلاثي :</strong>
<input type="text" name="full_name" class="form-control" placeholder="اكتب اسمك ثلاثي">
@error('الاسم')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>الجوال:</strong>
    <input type="text" name="phone" class="form-control" placeholder="رقم الجوال">
    @error('الجوال')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>:الجنسية</strong>
        <input type="text" name="nationality" class="form-control" placeholder="الجنسية">
        @error('الجنسية')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong> البريد الاكتروني:</strong>
            <input type="email" name="email" class="form-control" placeholder="البريد الاكتروني">
            @error('البريد اللاكتروني')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>كلمة المرور:</strong>
<input type="password" name="password" class="form-control" placeholder="كلمة المرور">
@error('كلمة المرور')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>تأكيد كلمة المرور:</strong>
    <input type="password  " name="confirm_password" class="form-control" placeholder="تأكيد كلمة المرور">
    @error('confirm_password')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
<button type="submit" class="btn btn-primary ml-3">ارسال</button>
</div>
</form>
</body>
</html>