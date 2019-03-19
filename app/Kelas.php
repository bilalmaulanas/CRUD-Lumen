<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Kelas extends Model
{

  public $table = 't_kelas';

  protected $fillable = ['nama_kelas','jurusan'];

}
