<!DOCTYPE html>
<html lang="en">
  <head>
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

              <h1 class="font_size">اضافة شاحنة </h1>

              <form action="{{('/add_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="div_design">
              <label >اسم الشاحنة  :</label>
              <input class="text_color" type="text" name="title" placeholder="اكتب اسم الشاحنة" required="">
              </div>

              <div class="div_design">
                <label > نوع تسجيل الشاحنة :</label>
                <input class="text_color" type="text" name="" placeholder=" اكتب نوع التسجيل " required="">
                </div>
                
                <div class="div_design">
                  <label >   ماركة الشاحنة :</label>
                  <input class="text_color" type="text" name="description" placeholder=" اكتب ماركة الشاحنة " required="">
                  </div>

                  <div class="div_design">
                    <label >  طراز الشاحنة :</label>
                    <input class="text_color" type="text" name="" placeholder=" اكتب نوع التسجيل ">
                    </div>

                <div class="div_design">
                  <label >سنة  الصنع  :</label>
                  <input class="text_color" type="number" name="price" placeholder="اكتب  سنة الصنع"required="">
                  </div>

                  <div class="div_design">
                    <label >حمولة الشاحنة  :</label>
                    <input class="text_color" type="number" name="dis_price" placeholder="" required>
                    </div>

                    <div class="div_design">
                      <label > الموديل :</label>
                      <input class="text_color" type="number" name="quantity" min="0" placeholder="  "required="">
                      </div> 
                      
                      <div class="div_design">
                        <label > الرقم التسلسلي :</label>
                        <input class="text_color" type="number" name="" min="0" placeholder="  ">
                        </div>

                        <div class="div_design">
                          <label > رقم اللوحة :</label>
                          <input class="text_color" type="number" name="" min="0" placeholder="  >
                          </div>

                          <div class="div_design">
                            <label > اللون :</label>
                            <input class="text_color" type="text" name="" min="0" placeholder="  ">
                            </div>

                            <div class="div_design">
                              <label > تاريخ انتهاء الاستمارة :</label>
                              <input class="text_color" type="date" name="" min="0" placeholder="">
                              </div>

                    

                      <div class="div_design">
                        <label >الانواع :</label>
                        <select class="text_color" name="category" required="">
                          <option value="" selected="" >اختار نوع الشاحنة  </option>
                          @foreach($category as $category)
                          <option>
                            {{$category->category_name}}
                          </option>

                          @endforeach
                          
                        </select>
                        </select>
                     </div>

                     <div class="div_design">
                      <label >صورة الشحانة :</label>
                      <input type="file" name="image" required="">
                      </div>

                      <div class="div_design">
                        <input class="btn btn-primary" type="submit" name="submit" value="اضافة الشاحنة" >

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