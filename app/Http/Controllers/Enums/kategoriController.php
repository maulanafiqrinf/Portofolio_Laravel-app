<?php

namespace App\Http\Controllers\Enums;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori as kategori;

class kategoriController extends Controller
{
    public function index()
    {
        $paramsData = [
            'kategori' => kategori::all(),
            'title' => 'Kategori',
        ];
        return view('backoffice.kategori.index', $paramsData);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $lastkategori = kategori::latest()->first();
        $newKodekategori = 'KT' . ($lastkategori ? (intval(substr($lastkategori->kd_kategori, 2)) + 1) : 1);

        kategori::create([
            'kd_kategori' => $newKodekategori,
            'name' => $request->name
        ]);

        return redirect()->route('kategori.index')->with('success', 'Data berhasil disimpan.');
    }

    public function destroy($kd_kategori)
    {
        try {
            kategori::find($kd_kategori)->delete();
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
