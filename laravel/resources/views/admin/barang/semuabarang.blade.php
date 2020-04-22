@extends('admin.layout.layout')
@section('konten')








<div class="box">
  <div class="box-header">

    <h3 class="box-title">Semua Daftar Barang</h3><br>

  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
      <thead>
      <tr>
        <th>ID Barang </th>
        <th>Pemilik Barang</th>
        <th>Harga</th>
        <th>MOQ</th>
        <th>Foto Barang</th>
        <th>Deskripsi</th>

      </tr>
      </thead>
      <tbody>
      @foreach($barangg as $barang)
      <tr>
        <td>{{$barang -> id}}</td>
        <td>{{$barang -> user_id}}</td>
        <td>{{$barang -> harga_barang}}</td>
        <td>{{$barang -> moq}}</td>
        <td class="center"> <img src="{{ asset('img/gambar_barang/' . $barang->gambar_barang) }}" alt="" width="50" height="50"> </td>
        <td>{!!substr($barang->deskripsi_barang,0,30)!!}...</td>



        </td>
      </tr>
      @endforeach



      </tbody>
      <tfoot>
        <tr>
          <th>ID Barang </th>
          <th>Pemilik Barang</th>
          <th>Harga</th>
          <th>MOQ</th>
          <th>Foto Barang</th>
          <th>Deskripsi</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->













</div>

@endsection
