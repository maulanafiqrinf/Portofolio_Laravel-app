<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangSaya extends Model
{
    use HasFactory;

    protected $table = 'tentang_sayas';

    protected $fillable = [
        'name', 
        'email',
        'profesi',
        'detail',
        'lokasi',
        'hp',
        'foto',
        'cv',
        'instagram',
        'linkedln',
        'github',
        'link',
    ]; 
}
