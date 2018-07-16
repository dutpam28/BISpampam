@extends('base')

@section('pageTitle','Kosika.com | Informasi Saldo')

@section('navbarMenu')
  <h1><a href="/home_user">Kosika<strong>.com</strong></a></h1>
  <nav>
    <ul class="menu">
  <li><a href="/home_user">Beranda</a></li>
  <li><a class="active" href="/infosaldo">Informasi Saldo</a></li>
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
           <h1>Anak IT -  Tambah Kontak</h1>
           <hr>
           <form action="{{ route('infosaldo.store') }}" method="post">
               {{ csrf_field() }}
               <div class="form-group">
                   <label>Simpanan Wajib:</label>
                   <input type="text" class="form-control" name="saldowajib">
               </div>
               <div class="form-group">
                   <label>Simpanan Pokok:</label>
                   <input type="text" class="form-control" name="saldopokok">
               </div>
               <div class="form-group">
                   <label>Simpanan Sukarela:</label>
                   <input type="text" class="form-control" name="saldosukarela">
               </div>
               <div class="form-group">
                   <label>Simpanan Sukarela:</label>
                   <input type="text" class="form-control" name="saldosukarela">
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
