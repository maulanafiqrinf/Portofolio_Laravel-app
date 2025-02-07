<?php

namespace App\Http\Controllers\Enums;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriKeahlian as kategori_keahlian;

class kategori_keahlianController extends Controller
{
    public function index()
    {
        $paramsData = [
            'kategorikeahlian' => kategori_keahlian::all(),
            'title' => 'Kategori Keahlian',
        ];
        return view('backoffice.kategori_keahlian.index', $paramsData);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $lastkategori_keahlian = kategori_keahlian::latest()->first();
        $newKodekategori_keahlian = 'KK' . ($lastkategori_keahlian ? (intval(substr($lastkategori_keahlian->kd_kategori_keahlian, 2)) + 1) : 1);

        kategori_keahlian::create([
            'kd_kategori_keahlian' => $newKodekategori_keahlian,
            'name' => $request->name
        ]);

        return redirect()->route('kategori_keahlian.index')->with('success', 'Data berhasil disimpan.');

    }
    
    public function destroy($kd_kategori_keahlian)
    {
        try {
            kategori_keahlian::find($kd_kategori_keahlian)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

}
