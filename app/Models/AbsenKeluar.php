<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenKeluar extends Model
{
    protected $fillable = ['id_karyawan', 'tanggal', 'jam_pulang', 'keterangan'];
    public function Absen()
    {
        return $this->hasMany(AbsenKeluar::class, 'id', 'id');
    }
    public function Karyawan()
    {
        return $this->BelongsTo(Karyawan::class, 'id_karyawan', 'id');
    }
}
