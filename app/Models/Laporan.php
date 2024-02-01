<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = ['id_karyawan','id_user','tanggal','status','catatan'];
    public function Laporan(){
        return $this->hasMany(Laporan::class, 'id','id');
    }
    public function Karyawan(){
        return $this->BelongsTo(Karyawan::class, 'id_karyawan','id');
    }
    public function User(){
        return $this->BelongsTo(User::class, 'id_user','id');
    }
}
