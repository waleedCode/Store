<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Required meta tags -->
    @include('admin.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
  </head>
  <style>
ontanier-fluid
    {
      width: 1650px;
      height: auto;
      background-color: rgb(49, 49, 45);
    }
  .card
  {
    margin: 10px 20px 0px 20px;
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
  .btn-primary
  {
    
  }
 
#img
{
  position:inherit;
  background-image: url(/images/logo-one.jpeg);
  background-color: #2E4053;
  background-size: cover;
  background-repeat: no-repeat;
  
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

    <div class="contanier-fluid" id="img">
  {{-- <img src="/images/log.jpeg" alt="image">  --}}
    
      <div class="row ">

          <div class="col-md-3">
           <div class="card text-center">
            <div class="card-header bg-success text-white">
              <div class="row align-items-center">
              <div class="col">
                 <i class="fa fa-flag fa-4x"></i>
              </div>
             <div class="col">
                <h3 class="display-3">740</h3>
                <h4>الدول</h4>
             </div>
             </div>
          </div>

        <div class="card-footer bg-white text-white">
          <h3>
            <a href="{{ url ('/cpanleall')}}" class="text-black">فتح</a>
          </h3>
        </div>
      </div>
          </div>

          <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-success text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-user fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4>المستخدمين</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/cpanleall')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-success text-white">
               <div class="row align-items-center">
               <div class="col">
                <i class="fa fa-briefcase fa-4x" aria-hidden="true"></i>
              </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4> محفظة x1</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/x1')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-success text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-money fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4>الايداعات البنكية</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/cpanleall')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>
          

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-warning text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-users fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4>العملاء</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/cpanleall')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-warning text-white">
               <div class="row align-items-center">
               <div class="col">
                <i class="fa fa-credit-card-alt fa-4x" aria-hidden="true"></i>
              </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4> محفظة العملاء</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/cpanleall')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-warning text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-truck fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4>الناقلين</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/driver')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>

          

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-warning text-white">
               <div class="row align-items-center">
               <div class="col">
                <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
              </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4> محفظة الناقلين</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/cpanleall')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-primary text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-shopping-bag fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4>كل الطلبات</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/all-orders')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>
           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-primary text-white">
               <div class="row align-items-center">
               <div class="col">
                <i class="fa fa-retweet fa-4x" aria-hidden="true"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4>الايجارات</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/rent-request')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>

          

        

           

        

    

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-danger text-white">
               <div class="row align-items-center">
               <div class="col">
                  <i class="fa fa-ban fa-4x"></i>
               </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4> الايقافات</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/stop-block')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>

           <div class="col-md-3">
            <div class="card text-center">
             <div class="card-header bg-danger text-white">
               <div class="row align-items-center">
               <div class="col">
                <i class="fa fa-frown-o fa-4x" aria-hidden="true"></i>
              </div>
              <div class="col">
                 <h3 class="display-3">80</h3>
                 <h4>الشكاوي</h4>
              </div>
              </div>
           </div>
 
         <div class="card-footer bg-white text-white">
           <h3>
             <a href="{{ url ('/cpanleall')}}" class="text-black">فتح</a>
           </h3>
         </div>
       </div>
           </div>
 
      </div> <!--  end of contanier     -->





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
</div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
   crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>