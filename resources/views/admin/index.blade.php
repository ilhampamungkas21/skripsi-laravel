@extends('admin.layout.layout')
@section('konten')


<div class="row">
  @can('isAdmin')
    <div class="col-lg-6 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>Jumlah User :  {{ $users }}</h3>

          <p> {{ Auth::user()->name }}</p>
        </div>
        <div class="icon">

          <i class="fa fa-users"></i>
        </div>
        <a href="/admin/daftarmember.html" class="small-box-footer">
          Selengkapnya <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-6 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>Barang Admin</h3>

          <p>Daftar Barang {{Auth::user() -> name }}</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/admin/barang/daftarbarang.html" class="small-box-footer">
          Selengkapnya <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>



    <div class="col-lg-6 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>Semua Barang</h3>

          <p>Semua Daftar Barang</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/admin/barang/semuadaftarbarang.html" class="small-box-footer">
          Selengkapnya <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    @endcan


    @can('isAdmin')
      <div class="col-lg-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3> {{ $users }}</h3>

            <p>Memberrr</p>
          </div>
          <div class="icon">

            <i class="fa fa-users"></i>
          </div>
          <a href="/admin/daftarmember.html" class="small-box-footer">
            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    @endcan

      @can('isPenjual')
      <!-- ./col -->
      <div class="col-lg-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>Daftar Barang</h3>


          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/admin/barang/daftarbarang.html" class="small-box-footer">
            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      @endcan







    <!-- daftar pesanan ---->


    @can('isAdmin')
      <div class="col-lg-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>daftar pesanan</h3>

            <p>daftar pesanan broooo</p>
          </div>
          <div class="icon">

            <i class="fa fa-users"></i>
          </div>
          <a href="/admin/semuadaftarpesanan.html" class="small-box-footer">
            semua daftar pesanan <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>

      </div>
    @endcan

    @can('isPenjual')
      <div class="col-lg-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>daftar pesanan</h3>

            <p>daftar pesanan broooo</p>
          </div>
          <div class="icon">

            <i class="fa fa-users"></i>
          </div>
          <a href="/admin/daftarpesanan.html" class="small-box-footer">
            semua daftar pesanan <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>

      </div>
    @endcan
















</div>

@endsection
