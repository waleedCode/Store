<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
       
        <!-- Required meta tags -->
    <style type="text/css">
    
    body {
      background: #ffffff;
      text-align: center;
      font-family: Arial, Helvetica;
    }
    
    .big {
      font-size: 1.2em;
    }
    
    .small {
      font-size: .7em;
    }
    
    .square {
      width: .7em;
      height: .7em;
      margin: .5em;
      display: inline-block;
    }
    
    /* Custom dropdown */
    .custom-dropdown {
      position: relative;
      display: inline-block;
      vertical-align: middle;
      margin: 10px; /* demo only */
    }
    
    .custom-dropdown select {
      background-color:rgb(255, 255, 255);
      color: #fff;
      font-size: inherit;
      padding: .5em;
      padding-right: 2.5em; 
      border: 0;
      margin: 0;
      border-radius: 5px;
      text-indent: 0.01px;
      text-overflow: '';
      -webkit-appearance: button; /* hide default arrow in chrome OSX */
    }
    
    .custom-dropdown::before,
    .custom-dropdown::after {
      content: "";
      position: absolute;
      pointer-events: none;
    }
    
    .custom-dropdown::after { /*  Custom dropdown arrow */
      content: "\25BC";
      height: 1em;
      font-size: .625em;
      line-height: 1;
      right: 1.2em;
      top: 50%;
      margin-top: -.5em;
    }
    
    .custom-dropdown::before { /*  Custom dropdown arrow cover */
      width: 3em;
      right: 0;
      top: 0;
      bottom: 0;
      border-radius: 0 px 5px 0;
    }
    
    .custom-dropdown select[disabled] {
      color: rgba(0,0,0,.3);
    }
    
    .custom-dropdown select[disabled]::after {
      color: rgba(0,0,0,.1);
    }
    
    .custom-dropdown::before {
      background-color: rgba(9, 118, 190, 0.15);
    }
    
    .custom-dropdown::after {
      color: rgba(160, 134, 134, 0.4);
    }
    
        font-family: 'Amiri', serif;
      .div_center
        {
          text-align: center;
          padding-top: 40px;
        }
        input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="file"],
    input[type="submit"]{
        background-color:rgb(255, 255, 255);
        width: auto;
        border-radius: 5px;
        color: rgb(0, 0, 0);
    }
   
        .font_size
        {
          font-size: 30px;
          padding-bottom: 20px;
          text-align: center;
        }
        .text_color
        {
          background-color:rgb(90, 192, 170);
        border: 2px solid rgb(255, 255, 255);
        width: auto;
        border-radius: 5px;
        color: rgb(0, 0, 0);
          padding-bottom: 20px;
        }
        label
        {
          display: inline-block;
          width: auto;
    
        }
        .div_design
        {
          padding-bottom:15px;
        }
        select,option
        {
          background-color: rgb(145, 87, 1);
          height: auto ;
          font-size: 14px;
          background-color:rgb(214, 225, 228);
        border: 2px solid rgb(255, 255, 255);
        width: auto;
        border-radius: 5px;
        color: rgb(0, 0, 0);
    }
    
    .font_size{
      text-align: right;
      margin-right: 200px;
      padding-top: 30px;
    }
    card
    {
      padding-right:100px; 
      margin: auto;
    }
        
        </style>
<link href="style.css" rel="stylesheet" type="text/css">
    <!-- Required meta tags -->
    
    @include('admin.css')
  </head>
  <body  >
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel" >
          <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif


              <div class="card col-lg-8" >
                <div class="card-header ">
                  اضافة طلب
                
                </div>      
                <div class="card-body">        

              <form action="{{('/add_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row" style="padding-top: 2px;">
                  <div class=" div_design">
                  <label >   اسم العميل  :</label>
                  <input class="custom-dropdown" type="text" name="owner_identity"  >
                  </div>

                  <div class=" div_design">
                    <label >   اسم السائق  :</label>
                    <input class="custom-dropdown" type="text" name="owner_identity"  >
                    </div>
              <div class=" div_design">
                <label >  السعر  :</label>
                <input class="custom-dropdown" type="text" name="board_number"  required="">
                </div>
                <div class=" div_design">
                  <label >  موقع الشحن  :</label>
                  <input class="custom-dropdown" type="text" name="board_number"  required="">
                  </div>
                  <div class=" div_design">
                    <label >  موقع التسليم  :</label>
                    <input class="custom-dropdown" type="text" name="board_number"  required="">
                    </div>
                  <div class="div_design">
                    <label >     نوع البضاعة :</label>
                    <span class="custom-dropdown">
                    <select  class="custom-dropdown" id="brand" name="car_brand" class="form-control">
                      <option value=" MAN">مواد غذائية</option>
                      <option value="MERCEDES">سيارات</option>
                      <option value="VOLOVO">مواد بناء</option>
                      <option value="">اخرى  </option>
                    </select>
                    </div>
                    <div class=" div_design">
                      <label >  تاريخ الطلب  :</label>
                      <input class="custom-dropdown" type="date" name="order_date"  required="">
                        </div>
             
                

                  
                  <div class="div_design">
                    <label >صورة البضاعة :</label>
                    <input type="file" name="image" required="">
                    </div>

                    
                  
              </div>{{-- Row Div End --}}


                 

                  
                        <input class="btn btn-primary" type="submit"  name="submit" value="اضافة الشاحنة" >

                      
              </div>
              </div>
            
              
                    </form>
                   
          
          
        
        
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>