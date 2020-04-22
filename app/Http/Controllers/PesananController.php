<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BarangModel;
use App\PesananModel;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailKeAdmin;

use Auth;
class PesananController extends Controller
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

     public function pembayaran_final()
     {
       $id = Auth::user()->id;
       $pesanan = PesananModel::where('id_pemesan',$id)->orderBy('created_at','desc')->first();

       return view('frontend_new.informasi_pembayaran')->with('pesanan',$pesanan);
     }

     // public function informasipembayaran()
     // {
     //   $id = Auth::user()->id;
     //   $pesanan = PesananModel::where('id_pemesan',$id)->orderBy('created_at','desc')->first();
     //   dd($pesanan->barang()->harga_barang);
     //   return view('frontend_new.informasi_pembayaran')->with('pesanan',$pesanan);
     //
     // }



     public function kirimemailadmin()
     {
       $id = Auth::user()->id;
       $pesanan = PesananModel::where('id_pemesan',$id)->orderBy('created_at','desc')->first();
       return view('frontend_new.kirim_email_ke_admin')->with('pesanan',$pesanan);
     }


     function kirimadmin(Request $request)
        {

             $data = array(
                 'id_pemesan'      =>  $request->id_pemesan,
                 'id_barang'   =>   $request->id,
                 'nama_penerima'      =>  $request->nama_penerima,
                 'telepon_pemesan'   =>   $request->telepon_pemesan,
                 'alamat_penerima'      =>  $request->alamat_penerima,
                'harga_total'   =>   $request->harga_total,
                'norek_pengirim'   =>   $request->norek_pengirim,
                'deskripsi'   =>   $request->deskripsi,
                'keterangan'   =>   $request->keterangan,
             );


          Mail::to("ujicobailham@gmail.com")->send(new SendMailKeAdmin($data));
          return back()->with('success', 'Pesanan Telah dikirimkan ke Admin untuk selanjutnya diproses ');

        }

     //public function daftarpesanan()
     //{
    //   $id = Auth::user()->id;

      // $daftarpesanan = PesananModel::where('id_pemesan',$id)->get();
      // return view('frontend_new.daftarpesanan_new')->with('daftarpesanan',$daftarpesanan);
    // }


     public function daftarpesanan_back()
     {
       $id = Auth::user()->id;

       $pesanan = PesananModel::where('id_pemesan',$id)->get();
       return view('admin.daftarpesanan.daftar_pesanan')->with('pesanan',$pesanan);
     }


     public function semuadaftarpesanan()
     {

       $pesanan = PesananModel::all();
       return view('admin.daftarpesanan.semua_pesanan')->with('pesanan',$pesanan);
     }

     public function editpesanan($id)
     {
         $pesanan = PesananModel::where('id', $id)->first();
         return view('admin.daftarpesanan.editpesanan')->with('pesanan', $pesanan);
     }






     public function updatestatus(Request $request, $id)
     {
       $request->validate([
       'status' => 'required',

       ]);

           $update = PesananModel::where('id',$id)->first();
           $update -> status = $request['status'];


           //update
           $update ->update();
           return redirect('/admin/semuadaftarpesanan.html');
     }
















    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
