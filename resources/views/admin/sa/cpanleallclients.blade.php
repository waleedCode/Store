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
      margin: 5px;
      width: 1650px;
      height: auto;
      background-color: rgb(49, 49, 45);
    }
  .card
  {
    margin: 5px 20px 0px 20px;
    margin-top: 10vh;
  }
  .card-title
  {
    font-size: 18px;
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

  p{

    padding-top: 5%;

    font-size: 24px;
    color: whitesmoke;
  }
  .cn
  {
    background-color: aqua;
  }
  #text
  {
    padding-top: 2%;
    padding-right: 50%;
  }
  .card
  {
    color: black !important;
    margin: 5px 20px 0px 20px;
    margin-top: 10vh;
    background-color: rgb(13, 102, 72) !important;
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

      <div id="text" class="row mt-3">
        <h2>
          العملاء
        </h2>
      </div>

      <hr style="background-color: rgb(226, 205, 14)">
      <div class="row">

          <div class="col-md-3">
           <div class="card text-center">
            <div class="card-header bg-success text-white">
              <div class="row align-items-center">
              <div class="col">
                 <i class="fa fa-flag fa-4x"></i>
              </div>
             <div class="col">
                <h3 class="display-3">4552</h3>
                <h4>السعودية</h4>
             </div>
             </div>
          </div>

        <div class="card-footer bg-white text-white">
          <h3>
            <a href="{{route('clients.index')}}"  class="text-success"> <i class="fa fa-arrow-right fa-x "></i>  فتح</a>
          </h3>

        </div>
      </div>

      

          </div>

          <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-warning text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-flag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">455</h3>
                 <h4>اليمن</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{route('clients.index')}}"  class="text-black">فتح</a>
           </h3>
 
         </div>
       </div>
 
       
 
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-danger text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-flag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">450</h3>
                 <h4>السودان</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{route('clients.index')}}"  class="text-black">فتح</a>
           </h3>
 
         </div>
       </div>
 
       
 
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-info text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-flag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">880</h3>
                 <h4>تشاد</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{route('clients.index')}}"  class="text-black">فتح</a>
           </h3>
 
         </div>
       </div>
 
       
 
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-danger text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-flag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">840</h3>
                 <h4>البحرين</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-black">
           <h3>
             <a href="{{route('clients.index')}}"  class="text-black">فتح</a>
           </h3>
 
         </div>
       </div>
 
       
 
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-primary text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-flag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">210</h3>
                 <h4>قطر</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{route('clients.index')}}"  class="text-black">فتح</a>
           </h3>
 
         </div>
       </div>
 
       
 
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-info text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-flag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">540</h3>
                 <h4>الإمارات</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{route('clients.index')}}"  class="text-black">فتح</a>
           </h3>
 
         </div>
       </div>
 
       
 
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-primary text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-flag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">780</h3>
                 <h4>الكاميرون</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{route('clients.index')}}"  class="text-black">فتح</a>
           </h3>
 
         </div>
       </div>
 
       
 
           </div>

<div class="chart mt-4">
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
 
  </body>
</html>