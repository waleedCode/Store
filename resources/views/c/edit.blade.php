<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
<style >
*{
    font-family: Arial, Helvetica;

}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

{{-- RTL bootstrap --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
 integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> تعديل بيانات العميل</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('clients.index') }}" enctype="multipart/form-data"> الرجوع</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('clients.update',$Client->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>رقم الهوية :</strong>
            <input type="text" name="identity_umber" value="{{ $Client->identity_umber  }}" class="form-control" placeholder="  ">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>الاسم ثلاثي:</strong>
                <input type="text" name="full_name" value="{{ $Client->full_name }}" class="form-control" placeholder="">
                @error('full_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>رقم الجوال:</strong>
<input type="email" name="phone" class="form-control" placeholder="Client Email" value="{{ $Client->phone }}">
@error('phone')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>الجنسية:</strong>
<input type="text" name="address" value="{{ $Client->nationality }}" class="form-control" placeholder="Client Address">
@error('nationality')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>البريد الاكتروني :</strong>
    <input type="text" name="address" value="{{ $Client->email  }}" class="form-control" placeholder=" ">
    @error('email ')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>كلمة المرور:</strong>
        <input type="text" name="address" value="{{ $Client->password }}" class="form-control" placeholder="">
        @error('password')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>: تأكيد كلمة المرور</strong>
            <input type="text" name="address" value="{{ $Client->confirm_password }}" class="form-control" placeholder="Client confirm_password">
            @error('confirm_password')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
<button type="submit" class="btn btn-primary ml-3 col-xs-12 col-sm-12 col-md-12">حفظ التعديل</button>
</div>
</form>
</div>
</body>
</html>