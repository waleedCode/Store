<html lang="ar" dir="rtl">
<head>
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=El+Messiri:wght@400;500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"

rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" 
integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
<style>
*{
    font-family: 'Amiri', serif;
font-family: 'El Messiri', sans-serif;
}

h4{
    margin-top: 20px;
}
.card
{
    margin-top: 30px;
}
.container
{
    width: 700px;
}
.btn
{
    float: left;
    margin-left: 35%;
}
</style>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
    
                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status')}}</h6>
                @endif
                <div class="card" dir="rtl">
                    <div class="card-header">
                        <h4>  تحديد مهام  الموظف  </h4>
                        {{-- <a href="{{ url ('std')}}" class="btn btn-danger mt-2 float-end" style="margin-bottom: 20px;">رجوع</a> --}}
                    </div>
                    <div class="card-body" dir="rtl">
                        <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                          <div>
                            <input type="checkbox" id="scales" name="scales"
                                   checked>
                            <label for="scales">تحديد الكل</label>
                            
                          </div>
                      
                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns"> العملاء</label>
                          </div>

                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">الناقلين</label>
                          </div> <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">الطلبات</label>
                          </div> 
                       
                           <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">ربط الناقلين</label>
                          </div>

                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">المندوبين</label>
                          </div> <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">الايردات</label>
                          </div> <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">الشكاوي</label>
                          </div>
                           <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">الايجارات</label>
                          </div>
                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">عمليات الايداع</label>
                          </div>
                            <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">محفظة x1</label>
                          </div>
                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">محفظة العملاء </label>
                          </div>
                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">محفظة الناقليين </label>
                          </div>

                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">متابعة الفواتير للعملاء </label>
                          </div>
                          
                          <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">متابعة الفواتير للنقليات </label>
                          </div>

                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">ملاحظات </span>
                            </div>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                          </div>

                        <div class="btn">
                          <button class="btn btn-primary text-center" > حفظ</button>

                        </div>
</body>
</html>