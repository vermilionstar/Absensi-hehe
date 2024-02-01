<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $fillable = ['id_karyawan','tanggal','jam_masuk','jam_pulang','kehadiran'];
    public function Absen(){
        return $this->hasMany(Absen::class, 'id','id');
    }
    public function Karyawan(){
        return $this->BelongsTo(Karyawan::class, 'id_karyawan','id');
    }
}
