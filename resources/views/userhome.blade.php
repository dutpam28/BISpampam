@extends('base')

@section('pageTitle','Kosika.com | Registrasi')

@section('navbarMenu')
  <h1><a href="/home_user">Kosika<strong>.com</strong></a></h1>
  <nav>
    <ul class="menu">
  <li><a class="active" href="/home_user">Beranda</a></li>
  <li><a href="/infosaldo">Informasi Saldo</a></li>
  <li><a href="/logout">Logout</a></li>
</ul>
</nav>
@endsection

@section('content')
  <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <p>Assalamualaikum, {{Session::get('nama')}}!</p>

            <h2>* Email kamu : {{Session::get('email')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <h2></h2>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
