<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $fillable = ['id_karyawan','tanggal_mulai','tanggal_selesai','alasan'];
    public function Cuti(){
        return $this->hasMany(Cuti::class, 'id','id');
    }
    public function Karyawan(){
        return $this->BelongsTo(Karyawan::class, 'id_karyawan','id');
    }
}
