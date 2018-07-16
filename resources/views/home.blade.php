@extends('base')

@section('pageTitle','Kosika.com')

@section('navbarMenu')
  <nav>
    <ul class="menu">
    <li><a class="active" href="/">Beranda</a></li>
    <li><a href="/about">Tentang Kami</a></li>
    <li><a href="/registrasi">Registrasi</a></li>
    <li><a href="/login">Login</a></li>
  </ul>
</nav>
@endsection

@section('displayIndex')
  <article class="grid_3">
    <div class="box">
      <figure><a href="#"><img src="assets/images/page1-img1.jpg" alt=""></a></figure>
      <div class="padding"> <strong class="title-3 color-1">Consulting</strong> <a class="link" href="#">Duis autem velm iriure dolor in hendrerit vulputate...</a> </div>
    </div>
  </article>
  <article class="grid_3">
    <div class="box">
      <figure><a href="#"><img src="assets/images/page1-img2.jpg" alt=""></a></figure>
      <div class="padding"> <strong class="title-3 color-2">Training</strong> <a class="link" href="#">Veliesse molestie consequat vel illum dolore...</a> </div>
    </div>
  </article>
  <article class="grid_3">
    <div class="box">
      <figure><a href="#"><img src="assets/images/page1-img3.jpg" alt=""></a></figure>
      <div class="padding"> <strong class="title-3 color-3">Analysis</strong> <a class="link" href="#">Feugiat nulla facilisis at vero eros et accumsan...</a> </div>
    </div>
  </article>
  <article class="grid_3">
    <div class="box">
      <figure><a href="#"><img src="assets/images/page1-img4.jpg" alt=""></a></figure>
      <div class="padding"> <strong class="title-3 color-4">Research</strong> <a class="link" href="#">Dignissim qui blandit praent luptatum...</a> </div>
    </div>
  </article>
@endsection

@section('content')

  <section id="content">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_4">
          <div class="indent-right">
            <div class="maxheight img-indent-bot">
              <h3>Welcome!</h3>
              <p>Guide.com is one o free website templates created by TemplateMonster.com. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
              This Guide.com Template goes with two pack ages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com. The basic package (without PSD source) is available for anyone without registration. </div>
            <a class="button" href="#">More</a> </div>
        </article>
        <article class="grid_4">
          <div class="indent">
            <div class="maxheight img-indent-bot">
              <h3>Recent News</h3>
              <time class="tdate-1" datetime="2012-02-06"><a class="link" href="#">Posted: 6.02.2012</a></time>
              <p>Nam liber tempor cum soluta nobis eleifend option congue nihimperdiet doming quod mazim placerat facer possim assum orem ipsum dolor sit amet consectetuer.</p>
              <time class="tdate-1" datetime="2012-02-04"><a class="link" href="#">Posted: 4.02.2012</a></time>
              Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation. </div>
            <a class="button" href="#">More</a> </div>
        </article>
        <article class="grid_4">
          <div class="indent-left">
            <div class="maxheight img-indent-bot">
              <h3 class="p1">Our Services</h3>
              <ul class="list-1">
                <li><a href="#">Management Consulting</a></li>
                <li><a href="#">Policy and Regulatory Analysis</a></li>
                <li><a href="#">Market Assessment</a></li>
                <li><a href="#">Program Management</a></li>
                <li><a href="#">Regulatory Support</a></li>
                <li><a href="#">Scientific and Risk Assessment</a></li>
                <li><a href="#">Change Management</a></li>
              </ul>
            </div>
            <a class="button" href="#">More</a> </div>
        </article>
      </div>
    </div>
  </section>
@endsection
