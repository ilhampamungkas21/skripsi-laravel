<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananModel extends Model
{
  protected $table= 'pesanan';
  protected $primarykey = 'id';
  protected $fillable =['id_pemesan','id_barang','nama_barang','nama_penerima','telepon_pemesan','telepon_penjual','alamat_penerima','harga_total','status'];


  public function barang()
    {
        return $this->hasOne('App\BarangModel','id','id_barang');
    }



}
