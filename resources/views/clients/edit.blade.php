<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">

<link href="style.css" rel="stylesheet" type="type/css">
<title> تعديل بيانات العميل   </title>
<style >

body {
    font-family: sans-serif;
    background-color: #eeeeee;
  }
  
  .file-upload {
    background-color: #ffffff;
    width: 400px !important;
    height: 400px !important;
    margin: 0 auto;
    padding: 20px;
  }
  
  .file-upload-btn {
    width: 100%;
    margin: 0;
    color: #fff;
    background: #1FB264;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #15824B;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }
  
  .file-upload-btn:hover {
    background: #1AA059;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }
  
  .file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
  }
  
  .file-upload-content {
    display: none;
    text-align: center;
  }
  
  .file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 50%;
    height: 50%;
    outline: none;
    opacity: 0;
    cursor: pointer;
  }
  
  .image-upload-wrap {
    margin-top: 20px;
    border: 4px dashed #1FB264;
    position: relative;
  }
  
  .image-dropping,
  .image-upload-wrap:hover {
    background-color: #1FB264;
    border: 4px dashed #ffffff;
  }
  
  .image-title-wrap {
    padding: 0 15px 15px 15px;
    color: #222;
  }
  
  .drag-text {
    text-align: center;
  }
  
  .drag-text h3 {
    font-weight: 100;
    text-transform: uppercase;
    color: #15824B;
    padding: 60px 0;
  }
  
  .file-upload-image {
    max-height: 200px;
    max-width: 200px;
    margin: auto;
    padding: 20px;
  }
  
  .remove-image {
    width: 200px;
    margin: 0;
    color: #fff;
    background: #cd4535;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #b02818;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }
  
  .remove-image:hover {
    background: #c13b2a;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }
  
  .remove-image:active {
    border: 0;
    transition: all .2s ease;
  }


*{
    font-family: Arial, Helvetica;

}
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
h2{
    text-align: right;
}

.pull-right{
    float: right;
}
body{
    background-color: rgb(13, 15, 15);
}
.container
{
  margin-top: 40px;
}
#btn
{
  float: left;
  margin-left: 40%;
}
</style>

    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=El+Messiri:wght@400;500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="margin-tb cols-md-8">
<div class="pull-left">
  <div class="pull-right" dir="rtl">
<a class="btn btn-primary" href="{{ route('clients.index') }}" enctype="multipart/form-data"> الرجوع</a>
</div>
<h2 style="text-align: center;"> تعديل بيانات العميل</h2>
</div>

</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('clients.update',$client->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>رقم الهوية :</strong>
            <input type="text" name="identity_umber" value="{{ $client->identity_umber  }}" class="form-control" placeholder="  ">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong >الاسم ثلاثي:</strong>
                <input type="text" name="full_name" value="{{ $client->full_name }}" class="form-control" placeholder="">
                @error('full_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>رقم الجوال:</strong>
<input type="text" name="phone" class="form-control" placeholder=" " value="{{ $client->phone }}">
@error('phone')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>الجنسية:</strong>
<input type="text" name="nationality" value="{{ $client->nationality }}" class="form-control" placeholder=" ">
@error('nationality')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>الجنسية:</strong>
    <input type="text" name="nationality" value="{{ $client->nationality }}" class="form-control" placeholder=" ">
    @error('nationality')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>البريد الاكتروني :</strong>
    <input type="text" name="email" value="{{ $client->email  }}" class="form-control" placeholder=" ">
    @error('email ')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>كلمة المرور:</strong>
        <input type="text" name="password" value="{{ $client->password }}" class="form-control" placeholder="">
        @error('password')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>: تأكيد كلمة المرور</strong>
            <input type="text" name="confirm_password" value="{{ $client->confirm_password }}" class="form-control" placeholder=" ">
            @error('confirm_password')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>


            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <div class="file-upload">
              <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">اضافة الصورة </button>
            
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                  <h3>قم بسحب  الصورة   </h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title">رفع الصورة </span></button>
                </div>
              </div>
            </div>

            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <div class="file-upload">
              <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">اضافة الصورة </button>
            
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                  <h3>قم بسحب  الصورة   </h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title">رفع الصورة </span></button>
                </div>
              </div>
            </div>
            

</div><button id="btn" type="submit" class="btn btn-primary  col-xs-12 col-sm-12 col-md-4 text-center">حفظ التعديل</button>

</form>
</div>





<script >
function readURL(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image-upload-wrap').hide();
  
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
  
        $('.image-title').html(input.files[0].name);
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload();
    }
  }
  
  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
      $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
      $('.image-upload-wrap').removeClass('image-dropping');
  });
</script>
</body>
</html>