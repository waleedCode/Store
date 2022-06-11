{{-- @extends('layouts.app')



@section('content') --}}
<html lang="ar" dir="rtl">
<head>
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=El+Messiri:wght@400;500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Amiri&display=swap');
*{
    font-family: 'Amiri', serif;
}
body
{
    font-family: 'Amiri', serif;
    background-color: rgb(24, 24, 22);
}
h4{
    margin-top: 20px;
}
.card
{
    
    margin-top: 30px;
}
.container
{
    width: 100%;
}
body {
    font-family: sans-serif;
    background-color: #eeeeee;
  }
  
  .file-upload {
    background-color: #ffffff;
    width: 300px !important;
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
    width: 40% ;
    height: 40%;
    outline: none;
    opacity: 0;
    cursor: pointer;
  }
  
  .image-upload-wrap {
    margin-top: 10px;
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
    max-height: 100px;
    max-width: 100px;
    margin: auto;
    padding: 20px;
  }
  
  .remove-image {
    width: 100px;
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

#save
{
    width: 20% !important;
}

.card{
    margin-bottom: 5px;
    font-size: 16px;
}
#save-btn
{
margin-left: 40% ;
 float: left;
    font-size: 26px;
    text-align: center;
    padding: 1.5px;
}
</style>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4> تعديل شركة النقليات  </h4>
                    {{-- <a href="{{ url ('std')}}" class="btn btn-danger mt-2 float-end" style="margin-bottom: 20px;">رجوع</a> --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="identity_umber">رمز الشركة </label>
                            <input type="text" name="identity_umber" id="identity_umber" class="form-control" value="B100" required>
                        </div>


                        <div class="form-group mb-3">
                            <label for="identity_umber"> السجل التجاري </label>
                            <input type="text" name="identity_umber" id="identity_umber" class="form-control" required>
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="full_name">  إسم المنشأة </label>
                            <input type="text" name="full_name" id="full_name" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                          <label for="">  رقم ترخيص النقليات </label>
                          <input type="text" name="phone" class="form-control" required>
                      </div>

                        <div class="form-group mb-3">
                            <label for="">  الرقم الضريبي </label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> اسم البنك </label>
                            <input type="text" name="nationality" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">  رقم الايبان IBAN</label>
                            <input type="text" name="image" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                          <label for="password">  كلمة المرور 	</label>
                          <input type="text" name="email" id="email" class="form-control" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="email">  تأكيد كلمة المرور 	</label>
                        <input type="password" name="email" id="email" class="form-control" required>
                    </div>
                   
                       
                        <div class="row">
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload"  >
                            
                          <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">اضافة الصورة الايبان </button>
                        
                          <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                              <h3>      </h3>
                            </div>
                          </div>
                          <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                              <button type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title">رفع الصورة  </span></button>
                            </div>
                          </div>
                        </div>

                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                          <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">   صورة ترخيص النقليات </button>
                        
                          <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                              <h3>     </h3>
                            </div>
                          </div>
                          <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                              <button type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title">رفع الصورة  </span></button>
                            </div>
                          </div>
                        </div>

                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                          <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )"> صورة  رقم حساب IBAN </button>
                        
                          <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                              <h3>      </h3>
                            </div>
                          </div>
                          <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                              <button type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title">رفع الصورة  </span></button>
                            </div>
                          </div>
                        </div>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                          <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )"> صورة الرقم الضريبي </button>
                        
                          <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                              <h3>      </h3>
                            </div>
                          </div>
                          <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                              <button type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title">رفع الصورة  </span></button>
                            </div>
                          </div>
                        </div>
                        </div>
                </div>
                        <div class="form-group mb-4">
                            <button type="submit" id="save-btn" class="btn btn-primary col-lg-3" style="margin-right: 15%;">حفظ </button>
                        </div>


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="app.js">

</script>

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
{{-- @endsection --}}