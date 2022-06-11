<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    <style type="text/css">
    .div_center
    {
      text-align: center;
      padding-top: 40px;
    }
    .font_size
    {
      font-size: 40px;
      padding-bottom: 40px;
    }
    .text_color
    {
      color: black;
      padding-bottom: 20px;
    }
    label
    {
      display: inline-block;
      width: 200px;

    }
    .div_design
    {
      padding-bottom:15px;
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
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif

            <div class="div_center">

              <h1 class="font_size">تعديل بيانات المركبة </h1>

              <form action="{{('/add_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="div_design">
              <label > رقم اللوحة  :</label>
              <input class="text_color" type="text" name="board_number" placeholder="  " required="" value="{{$product->board_number}}">
              </div>

            
                    <div class="div_design">
                      <label > الموديل :</label>
                      <input class="text_color" type="date" name="car_model" required=""  value="{{$product->car_model}}">
                      </div> 
                        <div class="div_design">
                          <label >  ماركة المركبة :</label>
                          <input class="text_color" type="text" name="car_brand"  value="{{$product->car_brand}}" >
                          </div>

                          <div class="div_design">
                            <label > تاريخ انتهاء كرت التشغيل</label>
                            <input class="text_color" type="text" name="card_expiration_date" min="0" placeholder="  " value="{{$product->card_expiration_date}}">
                            </div>

                            <div class="div_design">
                              <label > تاريخ انتهاء  الاستمارة</label>
                              <input class="text_color" type="text" name="card_expiration_date" min="0" placeholder="  " value="{{$product->vehicle_registration_expiry_date}}">
                              </div>

                           

                    

                      <div class="div_design">
                        <label >النوع :</label>
                        <select class="text_color" name="category"    value="{{$product->category}}">
                          <option value="{{$product->category}}" selected="" > {{$product->category}}   </option>
                          @foreach($category as $category)
                          <option>
                            {{$category->category_name}}
                          </option>

                          @endforeach
                          
                        </select>
                     </div>

                     <div class="div_design">
                      <label >صورة الشحانة :</label>
                      <input type="file" name="image" value="{{$product->image}}">
                      </div>

                      <div class="div_design">
                        <input class="btn btn-primary" type="submit" name="submit" value=" حفظ التعديل" >

                      </div>
                    </form>

            </div>
          </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>