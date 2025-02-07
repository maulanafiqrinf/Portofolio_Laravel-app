<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TentangSaya;
use Illuminate\Http\JsonResponse;

class tentangSayaController extends Controller
{
        /**
     * Menampilkan form pengaturan
     */
    public function index()
    {
        // Ambil data pertama dari tabel Pengaturan
        $tentang_saya = TentangSaya::first();
    
        $paramsData = [
            'tentang_saya' => $tentang_saya, // Bisa null jika tidak ada data
            'title' => 'Tentang Saya',
        ];
    
        return view('backoffice.tentang_saya.index', $paramsData);
    }

    /**
     * Memperbarui data Pengaturan
     */
    public function update(Request $request, $id): JsonResponse
    {
        $validated = $this->validateRequest($request);
    
        try {
            // Cari data Pengaturan berdasarkan ID
            $tentang_saya = TentangSaya::find($id);
    
            // Jika data tidak ditemukan, buat data baru
            if (!$tentang_saya) {
                $tentang_saya = TentangSaya::create($validated);
            } else {
                // Jika data ditemukan, lakukan pembaruan
                $tentang_saya->update($validated);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diupdate.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Validasi request untuk update
     */
    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'profesi' => 'nullable',
            'detail' => 'nullable',
            'lokasi' => 'nullable',
            'hp' => 'nullable',
            'foto' => 'nullable',
            'cv' => 'nullable',
            'instagram' => 'nullable',
            'linkedln' => 'nullable',
            'github' => 'nullable',
            'link' => 'nullable',
        ]);
    }
}
