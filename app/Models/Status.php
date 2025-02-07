<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses';
    protected $primaryKey = 'kd_status';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['kd_status','name'];

    public function proyek()
    {
        return $this->hasMany(Proyek::class, 'kd_status', 'kd_status');
    }

    public function layanan()
    {
        return $this->hasMany(Layanan::class, 'kd_status', 'kd_status');
    }

    public function sertifikat()
    {
        return $this->hasMany(Sertifikat::class, 'kd_status', 'kd_status');
    }

    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'kd_status', 'kd_status');
    }

    public function keahlian()
    {
        return $this->hasMany(Keahlian::class, 'kd_status', 'kd_status');
    }
}
