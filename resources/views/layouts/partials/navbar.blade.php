<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <div class="fl-logo-container">
        <a class="fl-logo" href="/" fl-analytics="PrimaryLogo" data-qtsb-section="NavBar" data-qtsb-label="Home" id="nav-home">
          <img style="width: 145px;height: 36px;" class="flicon-logo-fullcolor" src="https://vecta.io/blog/best-practices-for-svg-seo-in-google-image/best-practices-for-svg-seo-in-google-image.png" alt="Freelancer Logo">
        </a>
      </div>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li>
          <a class="nav-link px-2 text-secondary text-white" href="/jobs/" data-qtsb-section="NavBar" data-qtsb-label="BrowseJobs" id="nav-browse-jobs">
            Tài nguyên </a>
        </li>
        <li>
          <a class="nav-link px-2 text-secondary text-white" href="/info/how-it-works/" data-qtsb-section="NavBar" data-qtsb-label="HowItWorks" id="nav-how-it-works">
            Giới thiệu công cụ </a>
        </li>
        <li>
          <a class="nav-link px-2 text-secondary text-white" href="/info/how-it-works/" data-qtsb-section="NavBar" data-qtsb-label="HowItWorks" id="nav-how-it-works">
            Quy định trung gian </a>
        </li>
      </ul>

      @auth
      {{auth()->user()->name}}
      <div class="text-end">
        <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Đăng xuất</a>
      </div>
      @endauth

      @guest
      <div class="text-end">
        <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Đăng nhập</a>
        <a href="{{ route('register.perform') }}" class="btn btn-warning">Đăng ký</a>
      </div>
      @endguest
    </div>
  </div>
</header>