<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <link rel="stylesheet" href="/admin/assets/css/bootstrap-rtl.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
    <style>
        .container-scroller
        {
            background-color:azure;
        }
        .table{
            margin-left: 25% !important;    
        }

        .container
        {
            margin-left: 25% !important;
        }
        .table-hover
        {
            background-color:  aliceblue;
        }
        .table :hover
        {
            background-color: rgb(40, 185, 96);
            color:white;
        }
    </style>
    </head>
<body>
    <div class="container-scroller" >
        @include('admin.css')
    
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
          <!-- partial:partials/_navbar.html -->
          {{-- @include('admin.header') --}}
          <!-- partial -->
          @include('admin.body')
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('admin.script')
            <div class="container" dir="rtl">
                <div class="row">
                    <div class="col-md-6" style="margin-top: 40px" dir="rtl">
                            <h4 style="float: right">البحث  </h4> 
                            <form action="{{route ('web.search')}}" method="GET">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="qurey" name="qurey" placeholder=" ادخل رمز العميل">

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> بحث</button>
                                </div>
                            </form>
                            <br>
                            <br>
                            <br>
                            @if(isset($clients))

                            <table class="table ">

                                <thead>
                                    
                                
                                    <tr>
                                        <thead >
                                      <th  >رمز العميل</th>
                                      <th >رقم الهوية  </th>
                                      <th class="col-lg-2">الإسم ثلاثي  </th>
                                      <th >رقم الجوال</th>
                                      <th>الجنسية</th>
                                      <th> اسم البنك</th>
                                      
                                      <th>رقم حساب الايبان IBAN</th>
                                      <th>البريد الاكتروني</th>
                                      <th> صورة الهوية</th>
                                      <th >تعديل</th>
                                      <th>حذف</th>
                                      
                                      
                                </tr>
                                </thead>
                                @if(count($clients) > 0 )

                                    @foreach ($clients as $client)
                                    <tr>
                                        <th> {{$client->client_code}}  </th>
                                        <th> {{$client->identity_number }}   </th>
                                        <th style="width: 300px">{{$client->full_name}}  </th>
                                        <th>{{$client->phone}} </th>
                                        <th>{{$client->nationality }}  </th>
                                        <th>{{$client->bank_name}} </th>
                                        <th> {{$client->iban_number }} </th>
                                        <th> {{$client->email }} </th>
                                        <th>
                                          <img src="{{ asset('uploads/clients/'.$client->identity_image)}}" width="70px" height="70px" alt="image">
                                          </th>
                                        
                                        <th >
                                          <a class="btn btn-success"  href="{{ url ('edit-client/'.$client->id) }}">تعديل</a>
                                        
                                        </th>
                                        <th >
                                          <a class="btn btn-danger"  href="{{ url ('') }}">حذف</a>
                                        
                                        </th>
                                        </tr>
                                    @endforeach
 
                                @else
                                    <tr>
                                        <td>لا يوجد عميل بهذا الرمز  </td>
                                    </tr>
                                @endif
                                <tbody>
                            </table>
                            
                                <div class="pagination-block">

                                   {{ $clients->links()   }} 
                                </div>
                            @endif 

                    </div>
                </div>

            </div>


            
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       <script type="application/javascript">
       $(document).ready(function(){
   
           $('#qurey').on('keyup', function(){
   
               var text = $('#qurey').val();
   
               $.ajax({
   
                   type:"GET",
                   url: '127.0.0.1:8000/search',
                   data: {text: $('#qurey').val()},
                   success: function(data) {
   
                       console.log(data);
   
                    }
   
   
   
               });
   
   
           });
   
       });
       </script>
</body>
</html>