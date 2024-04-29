@auth
{{auth()->user()->name}}
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{!! url('assets/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.snow.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.js"></script>
  <script src="quill-image-resize-module-master/image-resize.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="{!! url('assets/css/sb-admin-2.min.css') !!}" rel="stylesheet">
  <style>
    sup{
    left: 5px;
}
.PbnGhe {
    box-flex: 2;
    flex-grow: 2;
    flex-shrink: 2;
    display: block;
    font: 400 14px / 20px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
    padding: 0 24px;
    overflow-y: auto;
}
.fb0g6 {
    position: relative;
}
.wafqxf {
    -webkit-box-align: center;
    box-align: center;
    align-items: center;
    display: flex;
    min-height: 48px;
}
.W8EZA, .S1jVsd {
    display: flex;
}
.qN626b {
    background: #bdbdbd;
    border: 1px solid #ccc;
    border-radius: 50%;
    /* padding: 6px; */
    /* width: 12px; */
    margin-right: 10px;
    min-width: 12px;
    font: 12px Arial, sans-serif;
    padding: 4px 9px;
  }
.hTXuX {
    color: rgba(0, 0, 0, 0.87);
}
.xfUKk .KHxj8b {
    color: rgba(0, 0, 0, 0.54);
    font-size: 15px;
    line-height: 20px;
    max-height: 20px;
    min-height: 0;
    overflow: hidden;
    white-space: nowrap;
}
.KHxj8b {
    box-flex: 1;
    flex-grow: 1;
    flex-shrink: 1;
    background-color: transparent;
    border: none;
    display: block;
    font: 400 16px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
    height: 24px;
    min-height: 24px;
    line-height: 24px;
    margin: 0;
    outline: none;
    padding: 0;
    resize: none;
    white-space: pre-wrap;
    word-wrap: break-word;
    z-index: 0;
    overflow-y: visible;
    overflow-x: hidden;
}
.xfUKk {
    display: block;
    flex: 1 1 auto;
    margin-right: 8px;
    padding-bottom: 12px;
}
.gVqAvf {
    display: flex;
}
.z0oSpf {
    background-color: rgba(0, 0, 0, .12);
    height: 1px;
    left: 0;
    margin: 0;
    padding: 0;
    position: absolute;
    width: 100%;
}
    </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SEO</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      @if(auth()->user()->role == 1)
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-cog"></i>
          <span>Thiết lập</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Thiết lập</h6>
            <a class="collapse-item {{ request()->is('categories*') ? ' active' : '' }}" href="{{ url('categories') }}">Danh mục</a>
            <a class="collapse-item {{ request()->is('tools*') ? ' active' : '' }}" href="{{ url('tools') }}">Giới thiệu công cụ</a>
            <a class="collapse-item {{ request()->is('regulations-admin*') ? ' active' : '' }}" href="{{ url('regulations-admin') }}">Quy định trung gian</a>
          </div>
        </div>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Tài nguyên</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('posts') }}">Bài đăng</a>
          </div>
        </div>
      </li>

      @if(auth()->user()->role == 1)
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-cog"></i>
          <span>User</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('categories') }}">Danh sách user</a>
          </div>
        </div>
      </li>
      @endauth

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->username}}</span>
                <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Hồ sơ cá nhân
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <div class="container-fluid">

          @if ( session('message') )
          <div class="alert alert-success" role="alert">
            {{ session('message') }}
          </div>
          @endif

          @yield('main_content')
        </div>
        <!-- End of Main Content -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Xác nhận bạn muốn đăng xuất không?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Chọn "Đăng xuất" bên dưới nếu bạn sẵn sàng kết thúc phiên hiện tại của mình.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy bỏ</button>
            <a class="btn btn-primary" href="{{ route('logout.perform') }}">Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{!! url('assets/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{!! url('assets/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{!! url('assets/js/sb-admin-2.min.js') !!}"></script>

    <script src="{!! url('assets/vendor/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! url('assets/vendor/datatables/dataTables.bootstrap4.min.js') !!}"></script>

    <script src="{!! url('assets/js/datatables-demo.js') !!}"></script>

</body>

</html>
@endauth