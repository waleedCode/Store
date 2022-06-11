<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="/images/log2.jpeg" width="300px;" height="200px;" alt="logoh" style="background-size: cover;" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/log.jpg" alt="logog" /></a>
  </div>
  <ul class="nav">
    {{-- <li class="nav-item profile"> --}}
      <div class="profile-desc">
        {{-- <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.png" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"> </h5>
            <span>نشط </span>
          </div>
        </div> --}}
        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">اعدادات الحساب </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">تغير كلمة المرور </p>
            </div>
          </a>
          {{-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-24px mdi-calendar-today text-success"></i>
              </div>
            </div> --}}
            {{-- <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div> --}}
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">التنقل</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="">
        <span class="menu-icon">
          <i class="mdi mdi-24px mdi-speedometer"></i>
        </span>
        <span class="menu-title">
          <a class="nav-link" href="{{('/cpanle')}}">لوحة التحكم</a>
        </span>
      </a>
    </li>
  
        </span>
        {{-- <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
       
      </div>
    </li> --}}
   {{-- ORDER SECTRION --}}
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-24px mdi-laptop"></i>
        </span>
        <span class="menu-title">الطلبات</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        
      </div>
    </li> --}}
    {{-- DRIVERS SECTION --}}
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-24px mdi-truck " style="mdi-48px;"></i>
        </span>
        <span class="menu-title">الناقلين</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
       
      </div>
    </li> --}}
  {{-- CLINETS --}}
  {{-- <li class="nav-item menu-items">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-icon">
        <i class="mdi mdi-24px mdi-account"></i>
      </span>
      <span class="menu-title">العملاء</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ url ('clients') }}"> العملاء </a></li>
      </ul>
    </div>
  </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('view_category')}}">
        <span class="menu-icon">
          <i class="mdi mdi-24px mdi-playlist-play"></i>
        </span>
        <span class="menu-title">انواع الشاحنات</span>
      </a>
    </li>
    
  </ul> --}}
</nav>


<style>
.sidebar
{
  background-color : #191c24;
}
  </style>