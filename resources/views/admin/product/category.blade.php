<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <style>

*
{
    font-family: 'Scheherazade New', serif;
    font-size: 20px;
}
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
    .h2_font
    {
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color
    {
        color: rgb(241, 240, 240);
    }
    .center
    {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white; 
    }
    .btn-primary:not(.btn-light):not(.btn-secondary), .wizard > .actions a:not(.btn-light):not(.btn-secondary)
    {
        color: rgb(252 252 252);
    background-color: #0090e7;
    width: 100px;
    height: 40px;
    border-radius: 10px;
    }
    [type='text'], [type='email'], [type='url'],
     [type='password'],
     [type='number'], [type='date'], [type='datetime-local'], 
     [type='month'], [type='search'],
      [type='tel'], [type='time'], [type='week'],
       [multiple],
     textarea, select
    {
        background-color: aliceblue;
        border-radius: 10px;
    }
    th, td {
  padding: 10px;
}
    table, th, td {
  border: 1px solid rgb(255, 255, 255);
  border-collapse: collapse;
}
[type='text'], [type='email'], [type='url'], [type='password'], [type='number'], [type='date'], [type='datetime-local'], [type='month'], [type='search'], [type='tel'], [type='time'], [type='week'], [multiple], 
textarea, select
{
    border-radius: 10px !important;
}
[type='text'], [type='email'], [type='url'], [type='password'], [type='number'], [type='date'], 
[type='datetime-local'], [type='month'], [type='search'], [type='tel'], [type='time'],
 [type='week'], [multiple], 
textarea, select :focus
{
 border: #0686d6 solid 2px;
}
table
{
  text-align: center;
}
th
{
    background-color: #1d1b20;
    color: whitesmoke;
    
}
h4
{
    
    text-align:center;
}
thead
{
  background-color: #646c74;
}
tr.tr-color{
  background-color: rgb(235, 235, 226);
}
.font-color
{
    font-size: 24px !important;
    color:#FFFFFF !important; 
}
td{
    color: #FFFFFF;
    font-size: 24px !important;
}
.table-responsive-xl
{
  margin-top: -14.5%;
  margin-right: 31%;
  width: 40%;;
}
.div_center
{
  width: 30%;
  margin-bottom: 10PX;
  
}
h4{
    margin-top: 20px;
}
.card
{
  border: solid 1px #FFFFFF;
  width: 30%;
  height: 30%;
    margin-top: 30px;
    border-radius: 15px;
}
.card input
{
 
}
label{
  margin-right: 15px;
  float: right;
}
.card-header
{
  border: solid 1px #FFFFFF;

}
.card-body
{
  border: solid 1px #FFFFFF;

}

body {
    font-family: sans-serif;
    background-color: #eeeeee;
  }
  
  .file-upload {
    background-color: #ffffff;
    width: 537px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .file-upload-btn {
    width: 100%;
    margin: 0;
    color: rgb(18, 150, 117);
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
    width: 100%;
    height: 100%;
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


  .file-upload-btn
  {
    background-color: #1FB264 !important;
    color: #eeeeee;

  }

  .file-upload
  {
    margin-right: -30px !important;
    margin: 110px;
  }


  #save
  {
    margin-top: -30%;
    margin-left: 200% !important;
    width: 400px;
  }
  
#select
{
  background-color: #222931;
  margin-left: -120px;
  color: white;
}
.box
{
  margin-top: -60px;
}

    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        {{-- @include('admin.header') --}}
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


              <div class="col-md-3">
                <ul class="navbar-nav w-100">
                  <li class="nav-item w-100">
                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                      <input type="text" class="form-control" placeholder="البحث ">
                    </form>
                  </li>
                </ul>
             

              <div class="box">
                <select id="select">
                  <option> بالاسم</option>
                  <option>النوع</option>
               
                </select>
              </div>
            </div>
              

              @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                {{-- <div class="div_center text-center"> --}}
                  <div class="card">
                    <div class="card-header">
                        <h4> اضافة نوع مركبة جديد  </h4>
                        {{-- <a href="{{ url ('std')}}" class="btn btn-danger mt-2 float-end" style="margin-bottom: 20px;">رجوع</a> --}}
                    </div>
                    <div class="card-body">
                    {{-- <h2 class="h2_font">اضافة نوع شاحنة</h2> --}}
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="category">  اسم النوع </label>
                          <input type="text" name="category" id="category" class="form-control" required>
                      </div>

                    
                    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                    <div class="file-upload">
                      <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )"> اضافة صورة  </button>
                    
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

                      <div class="form-group">
                        <button id="save" type="submit" name="submit" class="btn btn-primary col-lg-4" style="margin-right: 30%;">حفظ </button>
                    </div>
                        {{-- <input class="input_color" type="text" name="category" required  placeholder="  اكتب  اسم النوع الجديد هنا">
                        <input class="btn btn-primary" type="submit" name="submit" value="اضافة نوع"> --}}
                    </form>
                    </div>
                </div>
                <div class="container-md-8">
                  <div class="table-responsive-xl">
                    <table class="table table-sm" >
                  {{-- <caption>قائمة انواع السيارات</caption> --}}
                  <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم النوع</th>

                    <th scope="col">تعديل النوع</th>
                    <th scope="col">حذف النوع</th>

                    </thead>
                    @foreach ($data as $data)
                    <tbody>
                    <tr >
                      <th  class="table-light "
                        scope="row">{{$data->id}}</th>
                        <td class="table-light">{{$data->category_name}}</td>

                        <td class="table-light">
                          <a class="btn btn-success" href="{{url('#',$data->id)}}">تعديل</a>
                      </td>
                        <td class="table-light">
                            <a onclick="return confirm(' هل انت تريد الحذف')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">حذف</a>
                        </td>

                         
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  </div>

            </div>
        </div> 

        {{-- <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">انواع الشاحنات </h4>
                  <div class="table-responsive">
                    <table class="table" dir="r">
                      <thead>
                        <tr>
                          
                          <th class="font-color"> الحدث </th>
                          <th class="font-color"> نوع الشاحنة</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr> --}}
                          
                            

                            {{-- @foreach ($data as $data) --}}

                          
                          {{-- <td>
                            <a onclick="return confirm(' هل انت تريد الحذف')" class="btn btn-danger"
                             href="{{url('delete_category',$data->category_id)}}">حذف</a>
                        </td>                          <td> {{$data->category_name}} </td> --}}
                         
                          
                        {{-- </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    <script>
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