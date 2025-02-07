<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKeahlian extends Model
{
    use HasFactory;

    protected $table = 'kategori_keahlians';
    protected $primaryKey = 'kd_kategori_keahlian';
    public $incrementing = false;
    protected $fillable = ['kd_kategori_keahlian','name'];

    public function keahlian()
    {
        return $this->hasMany(Keahlian::class, 'kd_kategori_keahlian', 'kd_kategori_keahlian');
    }
}
