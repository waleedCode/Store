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
*{
    font-family: 'Amiri', serif;
font-family: 'El Messiri', sans-serif;
}
body
{
    background-color: rgb(24, 24, 22);
}
h4{
    margin-top: 20px;
}
.card
{
    margin-top: 130px;
}
.container
{
    width: 700px;
}


.card
{
    margin-right: -70%;
    width: 300px;
 height: 300px;
}

.company
{

     background-color: aliceblue;
 margin-top: -500px; 
  width: 150%;

    margin-right: 100%;
} 
.table{
 background-color: aliceblue;
 margin-top: -300px; 
  width: 70%;

}
tr{
    border: black solid 1px;
}
td{
    border: black solid 1px;

}

th #code-driver{
 width: 50%;
}

.driver
{
padding: 0;
margin: 20px 0px 10px 20px;
}

</style>
</head>
<div class="container">

    <div class="col-md-3" style="margin-top: 40px">
        <ul class="navbar-nav w-100">
          <li class="nav-item w-100">
            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
              <input type="text" class="form-control" placeholder="البحث ">
            </form>
          </li>
        </ul>
     

      <div class="box">
        <select id="select">
          <option> رمز الشركة</option>
          <option> اسم الشركة</option>
          <option> رمز الناقل</option>
          <option>اسم الناقل</option>
       
        </select>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4> اضافة عميل  </h4>
                    {{-- <a href="{{ url ('std')}}" class="btn btn-danger mt-2 float-end" style="margin-bottom: 20px;">رجوع</a> --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="identity_umber">رقم العميل </label>
                            <input type="text" name="identity_umber" id="identity_umber" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="identity_umber">رقم الهوية </label>
                            <input type="text" name="identity_umber" id="identity_umber" class="form-control" required>
                        </div>

               
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-lg-4" style="margin-right: 30%;">حفظ </button>
                        </div>


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>  تعديل بيانات سائق  </h4>
            {{-- <a href="{{ url ('std')}}" class="btn btn-danger mt-2 float-end" style="margin-bottom: 20px;">رجوع</a> --}}
        </div>
        <div class="card-body">
            <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="identity_umber">رقم العميل </label>
                    <input type="text" name="identity_umber" id="identity_umber" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="identity_umber">رقم الهوية </label>
                    <input type="text" name="identity_umber" id="identity_umber" class="form-control" required>
                </div>

       
               
                <div class="form-group">
                    <button type="submit" class="btn btn-primary col-lg-4" style="margin-right: 30%;">حفظ </button>
                </div>


            </form>
            
        </div>
    </div>

    <div>




  <div class="driver">
          <table class="company" >
            <thead class="thead-light">
              <tr>
                <th scope="col" class="col-md-1" id="code-driver">رمز الناقل </th>
                <th scope="col">اسم الناقل </th>
                <th scope="col" class="col-md-1">رمز الشركة </th>
                <th scope="col">اسم الشركة </th>
                <th scope="col" class="col-md-1">تعديل</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>

                <td>
                    <button class="btn btn-success">تعديل</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
              </tr>
            </tbody>
          </table>


        </div>




        <table class="table" >
            <thead class="thead-light">
              <tr>
                <th scope="col" class="col-md-1">رمز الشركة</th>
                <th scope="col" class="col-md-8">اسم الشركة</th>
                <th scope="col">عدد السائقين</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
              </tr>
            </tbody>
          </table>
    
<script src="app.js">

</script>
{{-- @endsection --}}