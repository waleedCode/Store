<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
<style type="text/css">
.center
{
    margin: auto;
    width: 50%;
    border: 2px solid white;
}
.font_size
{
     text-align: center;
     font-size: 40px;
     padding-top: 20px;
}
.ima_size
{
    width: 100px;
    height: 100px;
}
.th_color
{
    background: skyblue; 
}
.th_deg
{
   padding: 10px; 
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


                <h2  class="font_size"> كل المركبات</h2>

                <table class="center">
                    <tr class="th_color">
                        <th class="th_deg" >الاسم</th>
                        <th class="th_deg">الوصف</th>
                        <th class="th_deg">الكمية</th>
                        <th class="th_deg">النوع</th>
                        <th class="th_deg">السعر</th>
                        <th class="th_deg">التخفيض</th>
                        <th class="th_deg">الصورة</th>
                        <th class="th_deg">حذف</th>
                        <th class="th_deg">تعديل</th>
                    </tr>
                    @foreach($product as $product)

                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->dis_price}}</td>
                        <td>
                        <img class="img_size" src="/product/{{$product->image}}" >
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('هل تريد الحذف')" href="{{url('delete_product',$product->id)}}">حذف</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="">تعديل</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>

        </div>
        {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>