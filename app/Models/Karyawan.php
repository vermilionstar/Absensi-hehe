<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['nama','jabatan','departemen','notlp','alamat'];
    // public function Karyawan(){
    //     return $this->hasMany(Karyawan::class, 'id_karyawan','id');
    // }
}
