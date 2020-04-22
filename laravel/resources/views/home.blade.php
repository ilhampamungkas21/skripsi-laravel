@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                      @if(Auth::user()->level == 'pembeli')
                      <p>kembali / logout</p>
                       <a href="/">Kembali Ke Halaman Awal</a>
                      @endif

                      @if(Auth::check() && Auth::user()->level == 'admin' )
                        Selamat anda berhasil Login
                        <a href="/admin.html">Lanjut Halaman Admin</a> </br>
                        <a href="/">Kembali Ke Halaman Awal</a>
                      @endif

                      @if(Auth::user()->level == 'penjual')
                        Selamat anda berhasil Login
                      <a href="/admin.html">Lanjut Halaman Admin</a> </br>
                      <a href="/">Kembali Ke Halaman Awal</a>
                      @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
