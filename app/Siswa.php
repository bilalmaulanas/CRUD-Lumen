<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Siswa extends Model
{

  public $table = 't_siswa';

  protected $fillable = ['nis','nama_lengkap','jenis_kelamin','alamat'];

}
