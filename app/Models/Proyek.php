<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $table = 'proyeks';
    
    protected $fillable = [
        'name',
        'position',
        'pihak',
        'technology',
        'deskripsi',
        'jobdesk',
        'image',
        'image2',
        'image3',
        'link',
        'start_date',
        'completion_date',
        'kd_status',
        'kd_kategori'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'kd_status', 'kd_status');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kd_kategori', 'kd_kategori');
    }

}
