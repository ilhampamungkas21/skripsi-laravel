<html>
 <head>
  <title>How Send an Email in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box">
   <h3 align="center">How Send an Email in Laravel</h3><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="kirimemailadmin">
    {{ csrf_field() }}


    <div class="form-group">
     <label>ID Pesanan</label>
     <input type="text" name="name" class="form-control" value="{{$pesanan -> id_pemesan}}" />
    </div>

    <div class="form-group">
     <label>ID Barang</label>
     <input type="text" name="email" class="form-control" value="{{$pesanan -> id}}" readonly />
    </div>

    <div class="form-group">
     <label>Nama Penerima</label>
     <input type="text" name="email" class="form-control" value="{{$pesanan -> nama_penerima}}" readonly />
    </div>

    <div class="form-group">
     <label>Telepon Pemesan</label>
     <input type="text" name="email" class="form-control" value="{{$pesanan -> telepon_pemesan}}" readonly />
    </div>

    <div class="form-group">
     <label>Alamat Penerima</label>
     <input type="text" name="email" class="form-control" value="{{$pesanan -> alamat_penerima }}" readonly />
    </div>



    <div class="form-group">
     <label>Harga Barang</label>
     <input type="text" name="harga_total" value="{{$pesanan -> harga_total}}" class="form-control" readonly />
    </div>


    <div class="form-group">
     <label>Email Admin</label>
     <input type="text" name="targett" value="ujicobailham@gmail.com" class="form-control" readonly />
    </div>


    <div class="form-group">
     <label>No Rekening Pengirim</label>
     <input type="text" name="norek_pengirim" class="form-control">
    </div>

    <div class="form-group">
     <label>Enter Your Message</label>
     <textarea name="keterangan" placeholder="dawdawd" class="form-control" > segera ubah ststus pembayaran </textarea>
    </div>




    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>

   </form>
   <a href="/">
     <button type="button" class="btn btn-primary">kembali</button>
   </a>
  </div>
 </body>
</html>
