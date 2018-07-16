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
          @if(Session::has('alert-success'))
              <div class="alert alert-success">
                  <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
              </div>
          @endif
          <hr>
          <table class="table table-bordered">

              @php
              $id = Session::get('id');
              @endphp

              @foreach($datasaldo as $datasaldos)
                {{-- ($datasaldo where('user_id',$id) as $datasaldos) --}}
                <tbody>
                  <tr>
                    <td>Saldo Simpanan Wajib</td>
                    <td>{{ $datasaldos->saldowajib }}</td>
                    <td></td>
                    </tr>
                    <tr>
                      <td>Saldo Simpanan Pokok</td>
                      <td>{{ $datasaldos->saldopokok }}</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Saldo Simpanan Sukarela</td>
                      <td>{{ $datasaldos->saldosukarela }}</td>
                      <td></td>
                    </tr>
                  </tbody>
              @endforeach
          </table>
      </div>
      <!-- /.content -->
  </section>
  <!-- /.main-section -->
@endsection
