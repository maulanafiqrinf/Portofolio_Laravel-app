<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikans';
    protected $fillable = [
        'name',
        'jurusan',
        'deskripsi',
        'link',
        'start_date',
        'completion_date',
        'kd_status'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'kd_status', 'kd_status');
    }
}
