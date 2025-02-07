<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    protected $table = 'sertifikats';

    protected $fillable = [
        'name',
        'pihak',
        'deskripsi',
        'image',
        'link',
        'start_date',
        'completion_date',
        'kd_status',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'kd_status', 'kd_status');
    }
}
