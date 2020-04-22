<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\BarangModel;
use Alert;
use Illuminate\Support\Facades\Hash;
class BelumloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

      $barangg =DB::table('barang')->get();

      return view('frontend_new.index',['barangg' => $barangg]);
    }

    public function tentang()
    {

        return view('frontend_new.tentang');
    }

    public function registerpembeli()
    {
        return view('frontend_new.registerpembeli');
    }


    public function daftarproduk()
    {
      $barangg =DB::table('barang')->get();

      return view('frontend_new.daftarproduk',['barangg' => $barangg]);
    }



    public function deskripsi_barang($id)
    {
        $barang = BarangModel::where('id', $id)->first();
        return view('frontend_new.deskripsibarang')->with('barang', $barang);
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
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'level' => 'required',
        'telp' => 'required'
        ]);



        $tambah = new User();

        $tambah ->name           = $request['name'];
        $tambah ->email      = $request['email'];
        $tambah ->password       = Hash::make($request['password']);
        $tambah ->level               = $request['level'];
        $tambah ->telp               = $request['telp'];



        $tambah ->save();

        return redirect('/');
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
