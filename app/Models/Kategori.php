<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $primaryKey = 'kd_kategori';
    public $incrementing = false;
    protected $fillable = ['kd_kategori','name'];

    public function proyek()
    {
        return $this->hasMany(Proyek::class, 'kd_kategori', 'kd_kategori');
    }
    
}
