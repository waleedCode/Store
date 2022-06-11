<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
  </head>
  <style>

.contanier-fluid
    {
      width: 1650px;
      height: auto;
      background-color: rgb(49, 49, 45);
    }
  .card
  {
    margin: 10px 20px 0px 20px;
    margin-top: 10vh;
    width: 300px;
    height: 300;
  }
  .card-title
  {
    text-align: justify;
    font-size: 28px;
  }
  .btn-primary{
    direction: rtl;
    margin: 10px;
  }
  .chart
  {
    width: 90%;
    height: 70%;
    margin-top: 20px;
    float: left;
  }

  #myChart1
  {
    padding-left: 10px!important;
    float: left;
  }
  #myChart2
  {
    padding-right: 40px;
    
  }

  img{

     
      margin-right: -22px; 
      width: 280px;
      height: 120px;
      border-radius: 5%;
      border-bottom-style: solid #FFFFFF 1px;
  }

  </style>

  
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->



      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        {{-- @include('admin.header') --}}
        <!-- partial -->
        @include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <!-- End custom js for this page -->

    <div class="contanier-fluid"  >
      <div class="row ">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"> 
      <img  src="/product/sa2.png" width="280px;" height="150px;">

    </h5>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> عدد العملاء</h5>
    <i class="mdi mdi-48px mdi-account"></i>

    {{-- <p class="card-text">7</p> --}}
    <a href="{{ url ('clients') }}" class="btn btn-primary">فتح</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> شركات العملاء</h5>
    <p class="card-text">7</p>
    <a href="{{url('clients-company')}}" class="btn btn-primary">فتح</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> السائقين</h5>
    <p class="card-text">7</p>
    <a href="{{ url('/drivers-sa')}}" class="btn btn-primary">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">   شركات الناقليين </h5>
    <p class="card-text">7</p>
    <a  href="{{ url ('transport-company') }}" class="btn btn-primary">فتح</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">   الموظفيين</h5>
    <p class="card-text">7</p>
    <a href="{{ url ('index')}}" class="btn btn-primary">فتح</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">كل الطلبات</h5>
    <p class="card-text">7</p>
    <a href="{{('all-orders')}}" class="btn btn-primary">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> ربط وايقاف العملاء والسائقيين بالشركات</h5>
    <p class="card-text">7</p>
    <a href="{{('realtion-c-d')}}" class="btn btn-primary">فتح</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> الإيقافات والغرامات</h5>
    <p class="card-text">7</p>
    <a href="{{ url ('stop-block')}}" class="btn btn-primary">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">الايجارات </h5>
    <p class="card-text">7</p>
    <a href="{{url('rent-request')}}" class="btn btn-primary">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">100  </h5>
    <p class="card-text text-center"> عمليات الايداع  البنكي</p>
    <a href="{{url ('deposits')}}" class="btn btn-primary text-center">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">100  </h5>
    <p class="card-text text-center">محفظة x1</p>
    <a href="{{ url ('x1-main')}} "class="btn btn-primary text-center">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">100  </h5>
    <p class="card-text text-center">محفظة العملاء</p>
    <a href="{{ url ('x1-main')}}" class="btn btn-primary text-center">فتح</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">100  </h5>
    <p class="card-text text-center">محفظة الناقلين</p>
    <a href="{{ url ('wallet-drivers')}}" class="btn btn-primary text-center">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">100  </h5>
    <p class="card-text text-center"> متابعة فواتير العملاء للشركات</p>
    <a href="{{('clients-invoices')}}"  class="btn btn-primary text-center">فتح</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">100  </h5>
    <p class="card-text text-center"> متابعة فواتير النقليات للشركات</p>
    <a href="{{('companies-invoices')}}" class="btn btn-primary text-center">فتح</a>
  </div>
</div>

<div class="chart">
<canvas id="myChart1" style="width:100%;max-width:600px" style="float: right;"></canvas>

<script>
var xValues = ["العملاء", "الناقلين", "الطلبات", "الشكاوي", "الايردات"];
var yValues = [55, 49, 44, 24, 25];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "التحليل الاحصائي"
    }
  }
});

</script>



  <canvas id="myChart2" style="width:100%;max-width:600px" ></canvas>

  <script>
  var xValues = [100,200,300,400,500,600,700,800,900,1000];
  
  new Chart("myChart2", {
    type: "line",
    data: {
      labels: xValues,
      datasets: [{ 
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        borderColor: "red",
        fill: false
      }, { 
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
        borderColor: "green",
        fill: false
      }, { 
        data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
        borderColor: "blue",
        fill: false
      }]
    },
    options: {
      legend: {display: false}
    }
  });
  </script>

</div>
      </div>
 <div class="container">
      </div>
    </div>
  </body>
</html>