<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

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
    color: rgb(12, 11, 11);
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
 {
      background-color:rgb(255, 255, 255);
      width: 350px !important ;
      border-radius: 5px;
      color: rgb(0, 0, 0);
  }
  input[type="submit"]
  {
      border-radius: 5px;
      height: 40px;
      background-color: #1a8deb;
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
      border: 2px solid rgb(0, 0, 0);
      width: 350px;
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
              width: 350px;

        padding-bottom:10px;
      }
      select,option
      {
        background-color: rgb(145, 87, 1);
        height: auto ;
        font-size: 14px;
        background-color:rgb(51, 59, 61);
      border: 2px solid rgb(24, 13, 13);
      width: 350px!important;
      border-radius: 5px;
      color: rgb(0, 0, 0);
  }
  
  .font_size{
    text-align: right;
    margin-right: 200px;
    padding-top: 30px;
  }
  .card
  {
    color: black;
    width: 50%;
    padding-right:100px; 
    margin: auto;
  }
  .card
  {
    color: rgb(0, 0, 0);
    background-color: #5c6368 !important;
    width: 30% !important;
  }
  .card-body
  {
    float: right;
    direction: rtl
  }
  .card label
  {}
  .btn-danger
  {
    background-color: red!important;
  }

    
    </style>
    @include('admin.css')
  </head>
  <body  >
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        {{-- @include('admin.header') --}}
        <!-- partial -->
        <div class="main-panel" >
          <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif

            <div class="card col-lg-12" >
              <div class="card-header ">
اضافة شاحنة جديدة               
              </div>      
              <div class="card-body"> 
              

              <form action="{{('/add_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row" >
                  <div class=" div_design col-xs-12 col-sm-12 col-md-12">
                  <label >   رقم اللوحة  :</label>
                  <input class="custom-dropdown" type="text" name="owner_identity"  >
                  </div>

             

                <div class="div_design col-xs-12 col-sm-12 col-md-12">
                  <label > تاريخ انتهاء كرت التشغيل  :</label>
                  <input class="custom-dropdown"type="date" id="start" name="card_expiration_date"
                  value="2022-07-22"
                  min="2022-01-01" max="2040-12-31"  type="number" name="vehicle_registration_expiry_date" required>
                  </div>
                 


                <div class="div_design col-xs-12 col-sm-12 col-md-12">
                  <label >   تاريخ انتهاء الاستمارة :</label>
                  <input class="custom-dropdown" type="date" id="start" name="vehicle_registration_expiry_date"
                  value="2022-07-22"
                  min="2022-01-01" max="2040-12-31" name="card_expiration_date"  required="">
                  </div>

                  
              
            
                  
                  <div class="div_design col-xs-12 col-sm-12 col-md-12">
                    <label >     الموديل :</label>
                    <input type="date" name="car_model" />
                  </div>

                  <div class="div_design col-xs-12 col-sm-12 col-md-12">
                    <label >    ماركة المركبة :</label>
                    <span class="custom-dropdown">
                    <select  class="custom-dropdown" id="brand" name="car_brand" class="form-control">
                      <option >MAN</option>
                      <option>MERCEDES</option>
                      <option >VOLOVO</option>
                      <option >IVECO  </option>
                    </select>
                    </div>
                  
                  <div class="div_design col-xs-12 col-sm-12 col-md-12">
                    
                    <label >صورة الشحانة :</label>
                    <input type="file" class="text_color" name="image" required="">
                    </div>

                    
                    <div class="div_design col-xs-12 col-sm-12 col-md-12">
                      <label >الانواع :</label>
                      {{-- <select class="custom-dropdown" name="category" required="" style="width: 250px;"> --}}
                        <span class="custom-dropdown">
                          <select name="category" required>
                        <option value="" selected="" >اختار نوع الشاحنة  </option>
                        @foreach($category as $category)
                        <option>
                          {{$category->category_name}}
                        </option>

                        @endforeach
                        
                    
                      </select>
                     

                   </div>
              </div>{{-- Row Div End --}}


                 

                      <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="اضافة الشاحنة" >
                        <input class="btn btn-danger" type="submit" name="" value="إلغاء">

                      </div>
              </div>
              
                    </form>
          </div>
          </div>
        </div>
      </div>
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>