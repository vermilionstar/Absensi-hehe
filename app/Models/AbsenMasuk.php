<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenMasuk extends Model
{
    protected $fillable = ['id_karyawan', 'tanggal', 'jam_masuk', 'jam_keluar', 'keterangan'];
    public function Absen()
    {
        return $this->hasMany(AbsenMasuk::class, 'id', 'id');
    }
    public function Karyawan()
    {
        return $this->BelongsTo(Karyawan::class, 'id_karyawan', 'id');
    }
}
