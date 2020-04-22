<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\BarangModel;
use App\PesananModel;
use Illuminate\Http\Request;
use Auth;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

     public function checkout_barang($id)
     {
         $barang = BarangModel::where('id', $id)->first();

         return view('frontend_new.checkoutbarang')->with('barang', $barang);
     }

     //public function pembayaran_barang($id)
     //{
    //     $barang = BarangModel::where('id', $id)->first();

    //     return view('frontend_new.pembayaran')->with('barang', $barang);
     //}

     public function storepembelian(Request $request)
     {

         $id_pemesan = Auth::user()->id;
         $tambah = new PesananModel();

         $tambah ->id_pemesan = $id_pemesan;
         $tambah ->nama_barang = $request['nama_barang'];
         $tambah ->id_barang = $request['id_barang'];
         $tambah ->nama_penerima = $request['nama_penerima'];
         $tambah ->telepon_pemesan  = $request['telepon_pemesan'];
         $tambah ->telepon_penjual  = $request['telepon_penjual'];
         $tambah ->alamat_penerima  = $request['alamat_penerima'];
         $tambah ->harga_total  = $request['totalharga'];



         $tambah ->save();

         return redirect("pembayaranbarang.html");


     }





    public function show($id)
    {

    }



    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
