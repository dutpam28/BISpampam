@extends('base')

@section('pageTitle','Kosika.com | Tentang Kami')

@section('navbarMenu')
  <nav>
    <ul class="menu">
  <li><a href="/">Beranda</a></li>
  <li><a class="active" href="/about">Tentang Kami</a></li>
  <li><a href="/registrasi">Registrasi</a></li>
  <li><a href="/login">Login</a></li>
</ul>
</nav>
@endsection

@section('content')
  <section id="content">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_4">
          <div class="indent-right">
            <div class="maxheight img-indent-bot">
              <h3>About Us</h3>
              <p><span class="color-5">Nam liber tempor cum soluta</span> nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
              <span class="color-5">Aliquam erat volutpat.</span> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </div>
            <a class="button" href="#">More</a> </div>
        </article>
        <article class="grid_8">
          <div class="indent-left2">
            <div class="maxheight img-indent-bot">
              <h3>Our Team</h3>
              <div class="wrapper prev-indent-bot">
                <figure class="img-indent"><img src="assets/images/page2-img1.jpg" alt=""></figure>
                <div class="extra-wrap">
                  <h6>James Butler</h6>
                  Liber tempor cum soluta nobis eleifend option congue nihimperdiet doming quod mazim placerat facer possim assum orem ipsum dolor sit amet consectetuer. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. </div>
              </div>
              <div class="wrapper prev-indent-bot">
                <figure class="img-indent"><img src="assets/images/page2-img2.jpg" alt=""></figure>
                <div class="extra-wrap">
                  <h6>Tory Langdon</h6>
                  Magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vem iriure dolor in hendrerit in vulputate. </div>
              </div>
              <div class="wrapper">
                <figure class="img-indent"><img src="assets/images/page2-img3.jpg" alt=""></figure>
                <div class="extra-wrap">
                  <h6>Michael Dowson</h6>
                  Velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua vero eos et accusam. </div>
              </div>
            </div>
            <a class="button" href="#">More</a> </div>
        </article>
      </div>
    </div>
  </section>
@endsection
