<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
    .div_center
    {
      text-align: center;
      padding-top: 40px;
    }
    .font_size
    {
      font-size: 40px;
      padding-bottom: 40px;
    }
    .text_color
    {
      color: black;
      padding-bottom: 20px;
    }
    label
    {
      display: inline-block;
      width: 200px;

    }
    .div_design
    {
      padding-bottom:15px;
    }
    </style>
    @include('admin.css')
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
            <div class="div_center">

              <h1 class="font_size">Add Product</h1>

              <form action="{{('/add_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="div_design">
              <label >Product Title :</label>
              <input class="text_color" type="text" name="title" placeholder="اكتب اسم المنتج" required="">
              </div>

              <div class="div_design">
                <label >Product Desc:</label>
                <input class="text_color" type="text" name="description" placeholder=" اكتب الوصف المنتج" required="">
                </div>

                <div class="div_design">
                  <label >Product price :</label>
                  <input class="text_color" type="number" name="price" placeholder="اكتب سعر المنتج"required="">
                  </div>

                  <div class="div_design">
                    <label >Discount Price :</label>
                    <input class="text_color" type="number" name="dis_price" placeholder="">
                    </div>

                  <div class="div_design">
                    <label >Product Quantity:</label>
                    <input class="text_color" type="number" name="quantity" min="0" placeholder="اكتب كمية المنتج"required="">
                    </div>

                    

                      <div class="div_design">
                        <label >Product Category:</label>
                        <select class="text_color" name="category">
                          <option value="" selected="" >Add category here</option required="">
                          <option>shirt</option>
                        </select>
                     </div>

                     <div class="div_design">
                      <label >Product Image:</label>
                      <input type="file" name="image" required="">
                      </div>

                      <div class="div_design">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add product" >

                      </div>
                    </form>

            </div>
          </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>