{{-- @extends('layouts.app')



@section('content') --}}
<html lang="ar" dir="rtl">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
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
font-size: 15px !important;
direction: rtl;
}
#phone
{
  
}
select 
{
  font-size: 70px !important;

  direction: rtl !important ;
  float: left !important;
  width: 100%;
  height: 65px !important;

}
option
{
  font-size: 40em !important;
  direction: rtl !important ;
  float: left !important;  float: right;
  text-align: right;
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
  width: 30%;
    margin:5px 10px 5px ;

}
.container
{
    width: 100%;
}


body {
    font-family: sans-serif;
    background-color: #eeeeee;
  }
  
  .file-upload {
    background-color: #ffffff;
    width: 300px !important;
    height: 400px !important;
    margin: 0 auto;
    padding: 20px;
  }
  
  .file-upload-btn {
    width: 100%;
    margin: 0;
    color: #fff;
    background: #1FB264;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #15824B;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }
  
  .file-upload-btn:hover {
    background: #1AA059;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }
  
  .file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
  }
  
  .file-upload-content {
    display: none;
    text-align: center;
  }
  
  .file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 50%;
    height: 50%;
    outline: none;
    opacity: 0;
    cursor: pointer;
  }
  
  .image-upload-wrap {
    margin-top: 20px;
    border: 4px dashed #1FB264;
    position: relative;
  }
  
  .image-dropping,
  .image-upload-wrap:hover {
    background-color: #1FB264;
    border: 4px dashed #ffffff;
  }
  
  .image-title-wrap {
    padding: 0 15px 15px 15px;
    color: #222;
  }
  
  .drag-text {
    text-align: center;
  }
  
  .drag-text h3 {
    font-weight: 100;
    text-transform: uppercase;
    color: #15824B;
    padding: 60px 0;
  }
  
  .file-upload-image {
    max-height: 200px;
    max-width: 200px;
    margin: auto;
    padding: 20px;
  }
  
  .remove-image {
    width: 200px;
    margin: 0;
    color: #fff;
    background: #cd4535;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #b02818;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }
  
  .remove-image:hover {
    background: #c13b2a;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }
  
  .remove-image:active {
    border: 0;
    transition: all .2s ease;
  }



</style>
</head>
<div class="container" >
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <h6 class="alert alert-success col-md-4 fload-end">{{ session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4> اضافة موظف  </h4>
                    {{-- <a href="{{ url ('std')}}" class="btn btn-danger mt-2 float-end" style="margin-bottom: 20px;">رجوع</a> --}}
                </div>
                <div class="card-body">
                    <form action="{{ url('/add-employee') }}" method="POST" enctype="multipart/form-data" id="login" onsubmit="process(event)">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="emp_code"> رمز الموظف </label>
                            <input type="text" name="emp_code" id="emp_code" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="identity_number">رقم الهوية </label>
                            <input type="text" name="identity_number" id="identity_number" class="form-control" required>
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="emp_name"> الاسم ثلاثي </label>
                            <input type="text" name="emp_name" id="emp_name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">رقم الجوال </label>
                        

                        <!DOCTYPE html>
<html lang="en">
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="styles.css" />
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
 <body>

    
        
            <input id="phone" type="tel" name="phone" class="form-control" />
        
    

       <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
      </script>
 </body>
</html>
                        </div>
                     
                        <div class="form-group mb-3">
                          <label for=""> الجنسية </label>

                            <select data-live-search="true" data-live-search-style="startsWith" class="form-control selectpicker" name="nationality">
                             <option value="AW">آروبا</option>
                            <option value="AZ">أذربيجان</option>
                            <option value="AM">أرمينيا</option>
                            <option value="ES">أسبانيا</option>
                            <option value="AU">أستراليا</option>
                            <option value="AF">أفغانستان</option>
                            <option value="AL">ألبانيا</option>
                            <option value="DE">ألمانيا</option>
                            <option value="AG">أنتيجوا وبربودا</option>
                            <option value="AO">أنجولا</option>
                            <option value="AI">أنجويلا</option>
                            <option value="AD">أندورا</option>
                            <option value="UY">أورجواي</option>
                            <option value="UZ">أوزبكستان</option>
                            <option value="UG">أوغندا</option>
                            <option value="UA">أوكرانيا</option>
                            <option value="IE">أيرلندا</option>
                            <option value="IS">أيسلندا</option>
                            <option value="ET">اثيوبيا</option>
                            <option value="ER">اريتريا</option>
                            <option value="EE">استونيا</option>
                            <option value="IL">اسرائيل</option>
                            <option value="AR">الأرجنتين</option>
                            <option value="JO">الأردن</option>
                            <option value="EC">الاكوادور</option>
                            <option value="AE">الامارات العربية المتحدة</option>
                            <option value="BS">الباهاما</option>
                            <option value="BH">البحرين</option>
                            <option value="BR">البرازيل</option>
                            <option value="PT">البرتغال</option>
                            <option value="BA">البوسنة والهرسك</option>
                            <option value="GA">الجابون</option>
                            <option value="ME">الجبل الأسود</option>
                            <option value="DZ">الجزائر</option>
                            <option value="DK">الدانمرك</option>
                            <option value="CV">الرأس الأخضر</option>
                            <option value="SV">السلفادور</option>
                            <option value="SN">السنغال</option>
                            <option value="SD">السودان</option>
                            <option value="SE">السويد</option>
                            <option value="EH">الصحراء الغربية</option>
                            <option value="SO">الصومال</option>
                            <option value="CN">الصين</option>
                            <option value="IQ">العراق</option>
                            <option value="VA">الفاتيكان</option>
                            <option value="PH">الفيلبين</option>
                            <option value="AQ">القطب الجنوبي</option>
                            <option value="CM">الكاميرون</option>
                            <option value="CG">الكونغو - برازافيل</option>
                            <option value="KW">الكويت</option>
                            <option value="HU">المجر</option>
                            <option value="IO">المحيط الهندي البريطاني</option>
                            <option value="MA">المغرب</option>
                            <option value="TF">المقاطعات الجنوبية الفرنسية</option>
                            <option value="MX">المكسيك</option>
                            <option value="SA">المملكة العربية السعودية</option>
                            <option value="GB">المملكة المتحدة</option>
                            <option value="NO">النرويج</option>
                            <option value="AT">النمسا</option>
                            <option value="NE">النيجر</option>
                            <option value="IN">الهند</option>
                            <option value="US">الولايات المتحدة الأمريكية</option>
                            <option value="JP">اليابان</option>
                            <option value="YE">اليمن</option>
                            <option value="GR">اليونان</option>
                            <option value="ID">اندونيسيا</option>
                            <option value="IR">ايران</option>
                            <option value="IT">ايطاليا</option>
                            <option value="PG">بابوا غينيا الجديدة</option>
                            <option value="PY">باراجواي</option>
                            <option value="PK">باكستان</option>
                            <option value="PW">بالاو</option>
                            <option value="BW">بتسوانا</option>
                            <option value="PN">بتكايرن</option>
                            <option value="BB">بربادوس</option>
                            <option value="BM">برمودا</option>
                            <option value="BN">بروناي</option>
                            <option value="BE">بلجيكا</option>
                            <option value="BG">بلغاريا</option>
                            <option value="BZ">بليز</option>
                            <option value="BD">بنجلاديش</option>
                            <option value="PA">بنما</option>
                            <option value="BJ">بنين</option>
                            <option value="BT">بوتان</option>
                            <option value="PR">بورتوريكو</option>
                            <option value="BF">بوركينا فاسو</option>
                            <option value="BI">بوروندي</option>
                            <option value="PL">بولندا</option>
                            <option value="BO">بوليفيا</option>
                            <option value="PF">بولينيزيا الفرنسية</option>
                            <option value="PE">بيرو</option>
                            <option value="TZ">تانزانيا</option>
                            <option value="TH">تايلند</option>
                            <option value="TW">تايوان</option>
                            <option value="TM">تركمانستان</option>
                            <option value="TR">تركيا</option>
                            <option value="TT">ترينيداد وتوباغو</option>
                            <option value="TD">تشاد</option>
                            <option value="TG">توجو</option>
                            <option value="TV">توفالو</option>
                            <option value="TK">توكيلو</option>
                            <option value="TO">تونجا</option>
                            <option value="TN">تونس</option>
                            <option value="TL">تيمور الشرقية</option>
                            <option value="JM">جامايكا</option>
                            <option value="GI">جبل طارق</option>
                            <option value="GD">جرينادا</option>
                            <option value="GL">جرينلاند</option>
                            <option value="AX">جزر أولان</option>
                            <option value="AN">جزر الأنتيل الهولندية</option>
                            <option value="TC">جزر الترك وجايكوس</option>
                            <option value="KM">جزر القمر</option>
                            <option value="KY">جزر الكايمن</option>
                            <option value="MH">جزر المارشال</option>
                            <option value="MV">جزر الملديف</option>
                            <option value="UM">جزر الولايات المتحدة البعيدة الصغيرة</option>
                            <option value="SB">جزر سليمان</option>
                            <option value="FO">جزر فارو</option>
                            <option value="VI">جزر فرجين الأمريكية</option>
                            <option value="VG">جزر فرجين البريطانية</option>
                            <option value="FK">جزر فوكلاند</option>
                            <option value="CK">جزر كوك</option>
                            <option value="CC">جزر كوكوس</option>
                            <option value="MP">جزر ماريانا الشمالية</option>
                            <option value="WF">جزر والس وفوتونا</option>
                            <option value="CX">جزيرة الكريسماس</option>
                            <option value="BV">جزيرة بوفيه</option>
                            <option value="IM">جزيرة مان</option>
                            <option value="NF">جزيرة نورفوك</option>
                            <option value="HM">جزيرة هيرد وماكدونالد</option>
                            <option value="CF">جمهورية افريقيا الوسطى</option>
                            <option value="CZ">جمهورية التشيك</option>
                            <option value="DO">جمهورية الدومينيك</option>
                            <option value="CD">جمهورية الكونغو الديمقراطية</option>
                            <option value="ZA">جمهورية جنوب افريقيا</option>
                            <option value="GT">جواتيمالا</option>
                            <option value="GP">جوادلوب</option>
                            <option value="GU">جوام</option>
                            <option value="GE">جورجيا</option>
                            <option value="GS">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
                            <option value="DJ">جيبوتي</option>
                            <option value="JE">جيرسي</option>
                            <option value="DM">دومينيكا</option>
                            <option value="RW">رواندا</option>
                            <option value="RU">روسيا</option>
                            <option value="BY">روسيا البيضاء</option>
                            <option value="RO">رومانيا</option>
                            <option value="RE">روينيون</option>
                            <option value="ZM">زامبيا</option>
                            <option value="ZW">زيمبابوي</option>
                            <option value="CI">ساحل العاج</option>
                            <option value="WS">ساموا</option>
                            <option value="AS">ساموا الأمريكية</option>
                            <option value="SM">سان مارينو</option>
                            <option value="PM">سانت بيير وميكولون</option>
                            <option value="VC">سانت فنسنت وغرنادين</option>
                            <option value="KN">سانت كيتس ونيفيس</option>
                            <option value="LC">سانت لوسيا</option>
                            <option value="MF">سانت مارتين</option>
                            <option value="SH">سانت هيلنا</option>
                            <option value="ST">ساو تومي وبرينسيبي</option>
                            <option value="LK">سريلانكا</option>
                            <option value="SJ">سفالبارد وجان مايان</option>
                            <option value="SK">سلوفاكيا</option>
                            <option value="SI">سلوفينيا</option>
                            <option value="SG">سنغافورة</option>
                            <option value="SZ">سوازيلاند</option>
                            <option value="SY">سوريا</option>
                            <option value="SR">سورينام</option>
                            <option value="CH">سويسرا</option>
                            <option value="SL">سيراليون</option>
                            <option value="SC">سيشل</option>
                            <option value="CL">شيلي</option>
                            <option value="RS">صربيا</option>
                            <option value="CS">صربيا والجبل الأسود</option>
                            <option value="TJ">طاجكستان</option>
                            <option value="OM">عمان</option>
                            <option value="GM">غامبيا</option>
                            <option value="GH">غانا</option>
                            <option value="GF">غويانا</option>
                            <option value="GY">غيانا</option>
                            <option value="GN">غينيا</option>
                            <option value="GQ">غينيا الاستوائية</option>
                            <option value="GW">غينيا بيساو</option>
                            <option value="VU">فانواتو</option>
                            <option value="FR">فرنسا</option>
                            <option value="PS">فلسطين</option>
                            <option value="VE">فنزويلا</option>
                            <option value="FI">فنلندا</option>
                            <option value="VN">فيتنام</option>
                            <option value="FJ">فيجي</option>
                            <option value="CY">قبرص</option>
                            <option value="KG">قرغيزستان</option>
                            <option value="QA">قطر</option>
                            <option value="KZ">كازاخستان</option>
                            <option value="NC">كاليدونيا الجديدة</option>
                            <option value="HR">كرواتيا</option>
                            <option value="KH">كمبوديا</option>
                            <option value="CA">كندا</option>
                            <option value="CU">كوبا</option>
                            <option value="KR">كوريا الجنوبية</option>
                            <option value="KP">كوريا الشمالية</option>
                            <option value="CR">كوستاريكا</option>
                            <option value="CO">كولومبيا</option>
                            <option value="KI">كيريباتي</option>
                            <option value="KE">كينيا</option>
                            <option value="LV">لاتفيا</option>
                            <option value="LA">لاوس</option>
                            <option value="LB">لبنان</option>
                            <option value="LU">لوكسمبورج</option>
                            <option value="LY">ليبيا</option>
                            <option value="LR">ليبيريا</option>
                            <option value="LT">ليتوانيا</option>
                            <option value="LI">ليختنشتاين</option>
                            <option value="LS">ليسوتو</option>
                            <option value="MQ">مارتينيك</option>
                            <option value="MO">ماكاو الصينية</option>
                            <option value="MT">مالطا</option>
                            <option value="ML">مالي</option>
                            <option value="MY">ماليزيا</option>
                            <option value="YT">مايوت</option>
                            <option value="MG">مدغشقر</option>
                            <option value="EG">مصر</option>
                            <option value="MK">مقدونيا</option>
                            <option value="MW">ملاوي</option>
                            <option value="ZZ">منطقة غير معرفة</option>
                            <option value="MN">منغوليا</option>
                            <option value="MR">موريتانيا</option>
                            <option value="MU">موريشيوس</option>
                            <option value="MZ">موزمبيق</option>
                            <option value="MD">مولدافيا</option>
                            <option value="MC">موناكو</option>
                            <option value="MS">مونتسرات</option>
                            <option value="MM">ميانمار</option>
                            <option value="FM">ميكرونيزيا</option>
                            <option value="NA">ناميبيا</option>
                            <option value="NR">نورو</option>
                            <option value="NP">نيبال</option>
                            <option value="NG">نيجيريا</option>
                            <option value="NI">نيكاراجوا</option>
                            <option value="NZ">نيوزيلاندا</option>
                            <option value="NU">نيوي</option>
                            <option value="HT">هايتي</option>
                            <option value="HN">هندوراس</option>
                            <option value="NL">هولندا</option>
                            <option value="HK">هونج كونج الصينية</option>

                          </select>
                        </div>
                      
                        <div class="form-group mb-3">
                            <label for="email">البريد الاكتروني</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">كلمة المرور</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">تأكيد كلمة المرور</label>
                            <input type="password" name="password_confirm" class="form-control" required>
                        </div>
                        <div >
                          <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                          <div class="file-upload">
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">اضافة صورة الهوية </button>
                          
                            <div class="image-upload-wrap">
                              <input class="file-upload-input" name="identity_image" type='file' onchange="readURL(this);" accept="image/*" />
                              <div class="drag-text">
                                <h3>      </h3>
                              </div>
                            </div>
                            <div class="file-upload-content">
                              <img class="file-upload-image" src="#" alt="your image" />
                              <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title">رفع الصورة </span></button>
                              </div>
                            </div>
                          </div>

                        <div class="form-group " style="margin-right: 50%;">
                            <button type="submit"  class="btn btn-primary " >حفظ </button>
                        </div>


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
<script src="app.js">

</script>
<script >
    function readURL(input) {
        if (input.files && input.files[0]) {
      
          var reader = new FileReader();
      
          reader.onload = function(e) {
            $('.image-upload-wrap').hide();
      
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
      
            $('.image-title').html(input.files[0].name);
          };
      
          reader.readAsDataURL(input.files[0]);
      
        } else {
          removeUpload();
        }
      }
      
      function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
      }
      $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
      });


      $(function () {
    $('select').selectpicker();
});

    </script>
{{-- @endsection --}}