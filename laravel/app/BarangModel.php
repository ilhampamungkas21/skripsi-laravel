<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
  protected $table= 'barang';
  protected $primarykey = 'id';
  protected $fillable =['user_id','nama_barang','harga_barang','telepon_penjual','moq','deskripsi_barang','gambar_barang'];
  public $timestamp = false;

  public function user()
    {
        return $this->belongsTo('App\User');
    }

  public function pesanan()
  {
    return $this->belongsTo('App\PesananModel');
  }




}
