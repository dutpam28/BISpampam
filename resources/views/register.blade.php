@extends('base')

@section('pageTitle','Kosika.com | Registrasi')

@section('navbarMenu')
  <nav>
    <ul class="menu">
  <li><a href="/">Beranda</a></li>
  <li><a href="/about">Tentang Kami</a></li>
  <li><a class="active" href="/register">Registrasi</a></li>
  <li><a href="/login">Login</a></li>
</ul>
</nav>
@endsection

@section('content')
  <!-- Main Section -->
    <h3>Registrasi</h3>
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="alamat">Nama:</label>
                  <input type="text"  class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                  <label for="alamat">Tempat Lahir:</label>
                  <input type="text"  class="form-control" id="tempatlahir" name="tempatlahir">
                </div>
                <div class="form-group">
                  <label for="alamat">Tanggal Lahir:</label>
                  <input type="date"  class="form-control" id="tanggallahir" max="<?php echo date('Y-m-d'); ?>" name="tanggallahir">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <input type="text"  class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                  <label for="alamat">Nomor Telfon:</label>
                  <input type="text"  class="form-control" id="nohp" name="nohp">
                </div>
                <div class="form-group">
                  <input type="hidden"  class="form-control" id="status" name="status" value="1">
                </div>
                <div class="form-group">
                    <label for="alamat">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="alamat">Password Confirmation:</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
