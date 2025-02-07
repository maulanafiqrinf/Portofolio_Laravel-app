<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keahlian;
use App\Models\Status;
use App\Models\KategoriKeahlian;
use Illuminate\Http\JsonResponse;


class keahlianController extends Controller
{
    public function index()
    {
        $paramsData = [
            'keahlian' => Keahlian::all(),
            'statuses' => Status::all(),
            'kategoriKeahlian' => KategoriKeahlian::all(),
            'title' => 'Keahlian',
        ];
        
        return view('backoffice.keahlian.index', $paramsData);
    }

        /**
     * Menampilkan form tambah keahlian
     */
    public function create()
    {
        return view('backoffice.keahlian.create', [
            'title' => 'Tambah keahlian',
            'statuses' => Status::all(),
            'kategoriKeahlian' => KategoriKeahlian::all(),
        ]);
    }

    /**
     * Menyimpan data keahlian baru
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            Keahlian::create($validated);
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil disimpan.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Menghapus data keahlian
     */

    public function destroy(int $id): JsonResponse
    {
        try {
            Keahlian::findOrFail($id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Validasi request yang sama untuk store dan update
     */
    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'name' => 'nullable',
            'deskripsi' => 'nullable',
            'icon' => 'nullable',
            'kd_status' => 'required',
            'kd_kategori_keahlian' => 'required'
        ]);
    }

}
