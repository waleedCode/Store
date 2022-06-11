<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Required meta tags -->
    @include('admin.css')
<style type="text/css">
*
{
    font-family: 'Scheherazade New', serif;
    font-size: 20px;
}
table{
    color: rgb(226, 221, 221);
    text-align: justify;
    width: auto;
    height: auto;
}
.center
{
    margin: auto;
    width: auto;
    border: 2px solid rgb(29, 193, 235);
}
.font_size
{
     text-align: center;
     font-size: 40px;
     padding-top: 20px;
}
.ima_size
{
    width: 50px;
    height: 50px;
}
.th_color
{
    color: white;
    background: rgb(3, 130, 189); 
}
.
{
    color: white;
}
.th_deg
{
   padding: 10px; 
}
img
{
    border: solid 2px rgb(226, 233, 236);
    border-radius: 15px;
    margin: 3px 0 3px 0;
    width: 100px;
    height: 50px;

}
table {
  border-collapse: collapse;
}
tr { 
    color: black;
  border: solid;
  border-width: 1px 0;
  background: #fff;
}
a :hover{
    cursor: pointer;
}

</style>
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


                <h2  class="font_size">  بيانات  الطلب</h2>
                <div class="container-lg">
                <table  class="table table-bordered border-primary" style="margin-top: 20px;" >
                    <tr class="th_color">
                        <th class="th_deg" >   رقم الطلب</th>
                        <th class="th_deg" >  إسم العميل</th>

                        <th class="th_deg" > اسم السائق</th>
                        <th class="th_deg">نوع البضاعة</th>
                        <th class="th_deg">موقع الشحن</th>
                        <th class="th_deg"> موقع التوصيل</th>
                        <th class="th_deg">  السعر</th>
                        <th class="th_deg">   تاريخ الطلب</th>
                        
                        {{-- <th class="th_deg">الصورة</th>
                        <th class="th_deg">حذف</th>
                        <th class="th_deg">تعديل</th> --}}
                    </tr>
                    @foreach($orders as $order)

                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_name}}</td>
                        <a href=""><td>{{$order->driver_name}}</td></a>
                        <td>{{$order->goods_type}}</td>
                        <td>{{$order->from_location}}</td>
                        <td>{{$order->to_location}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->order_date}}</td>

                       

                        <td>
                        <img class="img_size" src="/product/{{$order->image}}" >
                        </td>
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
        </div>
        </div>
        {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>