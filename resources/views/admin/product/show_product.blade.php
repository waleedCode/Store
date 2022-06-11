<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Required meta tags -->
    @include('admin.css')
<style type="text/css">
table{
    width: auto;
    height: auto;
    color: rgb(255, 255, 255);
}
.center
{
    margin: auto;
    width: auto;
    border: 2px solid white;
}
.font_size
{
     text-align: center;
     font-size: 30px;
     padding-top: 20px;
     padding-left: 70%;

}
.ima_size
{
    width: 200px !important;
    height: 200px !important;
}
.th_color
{
    background: rgb(14, 57, 73); 
}
.th_deg
{
   padding: 10px; 
}
img
{
    /* border: solid 2px rgb(226, 233, 236);
    border-radius: 15px;
    margin: 3px 0 3px 0;
    width: 300px;
    height: 200px; */

}
/* table {
margin: auto;
border-collapse: collapse;
} */
table {
  position: relative;
  display: inline-block;
}

img {
  position: absolute;

  
  width: 100%;
  height: auto;
  
  object-fit: cover;
  object-position: center;
}
tr { 
  border: solid;
  border-width: 1px 0;
}
*
{
    font-family: 'Scheherazade New', serif;
    font-size: 20px;
}
.th_color
{
    color: rgb(255, 251, 251);
    background: rgb(39, 44, 48); 
}
tr { 
    font-size: 18px;
    color: black;
  background: rgb(146, 142, 142);
}

</style>
<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">

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
                
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif


                <h2  class="font_size">  بيانات المركبة وسائقها</h2>
                <div class="container-lg col-lg-8"   style="float: right;">
                <table  class="table table-bordered border-primary" style="margin-top: 20px;" >
                    <tr class="th_color">
                        <th class="th_deg" >#</th>
                        <th class="th_deg" >رقم اللوحة	</th>
                        <th class="th_deg" >الموديل </th>
                        <th class="th_deg">النوع</th>
                        <th class="th_deg">ماركة المركبة</th>
                        <th class="th_deg">تاريخ انتهاء رخصة القيادة</th>
                        <th class="th_deg">تاريخ انتهاء كرت التشغيل</th>
                        <th class="th_deg">حذف</th>
                        <th class="th_deg">تعديل</th>
                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->board_number}}</td>
                         <td>{{$product->car_model}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->car_brand}}</td>
                        <td>{{$product->driving_license_exp_date}}</td>
                        <td>{{$product->card_expiration_date}}</td>
                        <td>{{$product->vehicle_registration_expiry_date}}</td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('هل تريد الحذف')" href="{{url('delete_product',$product->id)}}">حذف</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_product' ,$product->id)}}">تعديل</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
            

   
        {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>