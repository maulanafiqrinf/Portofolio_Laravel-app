<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keahlian;
use App\Models\Status;
use App\Models\KategoriKeahlian;
use App\Models\Layanan;
use App\Models\Pendidikan;
use App\Models\Pengaturan;
use App\Models\Proyek;
use App\Models\Kategori;
use App\Models\Sertifikat;
use App\Models\TentangSaya;

class IndexController extends Controller
{
    public function index(){

        $paramsData = [
            'mes'=>TentangSaya::first(),
            'services' => Layanan::with('status')
                ->whereHas('status', function ($query) {
                    $query->where('name', 'Aktif');
                })
                 ->get(),
            'pengalaman' => Proyek::with('kategori', 'status')
                ->whereHas('kategori', function ($query) {
                    $query->where('name', 'Pengalaman');
                })
                ->whereHas('status', function ($query) {
                    $query->where('name', 'Aktif');
                })
                ->orderByRaw(
                    "CASE WHEN completion_date IS NULL THEN 1 ELSE 0 END DESC, 
                     completion_date DESC"
                )
                ->get(),
            'proyek' => Proyek::with('kategori', 'status')
                ->whereHas('kategori', function ($query) {
                    $query->where('name', 'Proyek');
                })
                ->whereHas('status', function ($query) {
                    $query->where('name', 'Aktif');
                })
                ->orderByRaw(
                    "CASE WHEN completion_date IS NULL THEN 1 ELSE 0 END DESC, 
                     completion_date DESC"
                )
                ->get(),
            'pendidikan' => Pendidikan::with('status')
                ->whereHas('status', function ($query) {
                    $query->where('name', 'Aktif');
                })
                ->orderByRaw(
                    "CASE WHEN completion_date IS NULL THEN 1 ELSE 0 END DESC, 
                     completion_date DESC"
                )
                ->get(),
            'sertifikat' => Sertifikat::with('status')
                ->whereHas('status', function ($query) {
                    $query->where('name', 'Aktif');
                })
                ->orderByRaw(
                    "CASE WHEN completion_date IS NULL THEN 1 ELSE 0 END DESC, 
                     completion_date DESC"
                )
                ->get(),
            'softskill' => Keahlian::with('kategoriKeahlian', 'status')
                ->whereHas('kategoriKeahlian', function ($query) {
                    $query->where('name', 'SoftSkills');
                })
                ->whereHas('status', function ($query) {
                    $query->where('name', 'Aktif');
                })
                ->get(),
            'hardskill' => Keahlian::with('kategoriKeahlian', 'status')
                ->whereHas('kategoriKeahlian', function ($query) {
                    $query->where('name', 'HardSkills');
                })
                ->whereHas('status', function ($query) {
                    $query->where('name', 'Aktif');
                })
                ->get(),
            'pengaturan' =>Pengaturan::first()
        ];
        return view('frontend',$paramsData);
    }
}