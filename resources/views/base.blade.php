<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('pageTitle')</title>
<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen">
<script src="assets/js/jquery-1.7.1.min.js"></script>
<script src="assets/js/cufon-yui.js"></script>
<script src="assets/js/cufon-replace.js"></script>
<script src="assets/js/Asap_400.font.js"></script>
<script src="assets/js/Asap_italic_400.font.js"></script>
<script src="assets/js/FF-cash.js"></script>
<script src="assets/js/jquery.equalheights.js"></script>
<script src="assets/js/jquery.cycle.all.js"></script>
<script>
$('#banners')
    .cycle({
    fx: 'fade',
    delay: 7000,
    timeout: 30000,
    manualTrump: false,
    cleartypeNoBg: true,
    next: '#next',
    prev: '#prev'
});
</script>
<!--[if lt IE 9]>
<script src="assets/js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="main">
  <!--==============================header=================================-->
  <header>
    <div class="container_12">
      <div class="wrapper p3">
        <div class="grid_12">
          <div class="wrapper border-bot">
            @yield('navbarMenu')
          </div>
          <div class="wrapper">
            <div id="banners" class="border-bot">
              <div> <strong class="title-1">Let’s Create</strong> <strong class="title-2">Your Company’s Growth Strategy Together</strong> </div>
              <div> <strong class="title-1">We Know</strong> <strong class="title-2">What It Takes To Be The Leader!</strong> </div>
              <div> <strong class="title-1">Discover</strong> <strong class="title-2">The Business Secrets For Your Success</strong> </div>
            </div>
            <a id="prev" href="#">prev</a> <a id="next" href="#">next</a> </div>
        </div>
      </div>
      @yield('displayIndex')
      <div class="clear"></div>
    </div>
  </header>
  <!--==============================content================================-->
  @yield('content')
  <!--==============================footer=================================-->
  <footer>
    <div class="inner">
      <div class="footer-bg"> Kosika.com &copy; 2018 <span>Website Template by <a target="_blank" href="http://www.templatemonster.com/" class="link">TemplateMonster.com</a></span> </div>
    </div>
  </footer>
</div>
<script>Cufon.now();</script>
</body>
</html>
