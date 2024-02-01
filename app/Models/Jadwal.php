<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = ['id_karyawan','tanggal_kerja','jam_masukk','jam_pulangg'];
    public function Jadwal(){
        return $this->hasMany(Jadwal::class, 'id','id');
    }
    public function Karyawan(){
        return $this->BelongsTo(Karyawan::class, 'id_karyawan','id');
    }
}
