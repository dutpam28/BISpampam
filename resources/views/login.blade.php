@extends('base')

@section('pageTitle','Kosika.com | Login')

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

@section('content')
  <!-- Main Section -->
      <h3>Login Form</h3>
      <section class="main-section">
          <!-- Add Your Content Inside -->
          <div class="content">
              <!-- Remove This Before You Start -->
            <hr>
              @if(\Session::has('alert'))
                  <div class="alert alert-danger">
                      <div>{{Session::get('alert')}}</div>
                  </div>
              @endif
              @if(\Session::has('alert-success'))
                  <div class="alert alert-success">
                      <div>{{Session::get('alert-success')}}</div>
                  </div>
              @endif
              <form action="{{ url('/loginPost') }}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                      <label for="alamat">Password:</label>
                      <input type="password" class="form-control" id="password" name="password"></input>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-md btn-primary">Login</button>
                      <a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>
                  </div>
              </form>
          </div>
          <!-- /.content -->
      </section>
      <!-- /.main-section -->
@endsection
