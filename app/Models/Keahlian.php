<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    use HasFactory;

    protected $table = 'keahlians';
    
    protected $fillable = [
        'name',
        'deskripsi',
        'icon',
        'kd_status',
        'kd_kategori_keahlian'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'kd_status', 'kd_status');
    }

    public function kategoriKeahlian()
    {
        return $this->belongsTo(KategoriKeahlian::class, 'kd_kategori_keahlian', 'kd_kategori_keahlian');
    }
}
