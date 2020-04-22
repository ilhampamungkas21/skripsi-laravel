<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Gate;
use App\BarangModel;
use App\PesananModel;
use Illuminate\Http\Request;
use Auth;
use Alert;
class BarangController extends Controller
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
    //public function index()
    //{
      //$barangg =DB::table('barang')->get();
      //return view('admin.barang.daftarbarang',['barangg' => $barangg]);
    //}

    public function index()
    {
      $id = Auth::user()->id;

      $barangg = BarangModel::where('user_id',$id)->get();
      return view('admin.barang.daftarbarang')->with('barangg',$barangg);
    }


    public function semuabarang()
    {

      $barangg = BarangModel::all();
      return view('admin.barang.semuabarang')->with('barangg',$barangg);
    }


    public function semuadaftarpesanan()
    {

      $pesanan = PesananModel::all();
      return view('admin.daftarpesanan.semua_pesanan')->with('pesanan',$pesanan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storebarang(Request $request)
    {
      $this->validate($request,[
        'user_id'              => 'required',
        'nama_barang'          => 'required',
        'harga_barang'         => 'required',
        'moq'                  => 'required',
        'deskripsi_barang'     => 'required',
        'gambar_barang'        => 'required'
        ]);

        $tambah = new BarangModel();

        $tambah ->user_id           = $request['user_id'];
        $tambah ->nama_barang       = $request['nama_barang'];
        $tambah ->harga_barang       = $request['harga_barang'];
        $tambah ->moq               = $request['moq'];
        $tambah ->deskripsi_barang  = $request['deskripsi_barang'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_barang');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_barang')->move("img/gambar_barang/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $tambah->gambar_barang = $fileName;


        $tambah ->save();


        return redirect('/admin/barang/daftarbarang.html');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editbarang($id)
    {
        $edit = BarangModel::where('id', $id)->first();
        return view('admin.barang.editbarang')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebarang(Request $request, $id)
    {

        $update = BarangModel::where('id',$id)->first();

        $update ->user_id           = $request['user_id'];
        $update ->nama_barang       = $request['nama_barang'];
        $update ->harga_barang       = $request['harga_barang'];
        $update ->moq               = $request['moq'];
        $update ->deskripsi_barang  = $request['deskripsi_barang'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_barang');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_barang')->move("img/gambar_barang/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $update->gambar_barang = $fileName;


        $update ->save();


        return redirect('/admin/barang/daftarbarang.html');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hapus = BarangModel::find($id);
      $hapus->delete();
      return redirect('/admin/barang/daftarbarang.html');
    }
}
