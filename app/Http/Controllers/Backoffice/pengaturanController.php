<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;
use Illuminate\Http\JsonResponse;

class PengaturanController extends Controller
{
    /**
     * Menampilkan form pengaturan
     */
    public function index()
    {
        // Ambil data pertama dari tabel Pengaturan
        $pengaturan = Pengaturan::first();
    
        $paramsData = [
            'pengaturan' => $pengaturan, // Bisa null jika tidak ada data
            'title' => 'Pengaturan',
        ];
    
        return view('backoffice.pengaturan.index', $paramsData);
    }

    /**
     * Memperbarui data Pengaturan
     */
    public function update(Request $request, $id): JsonResponse
    {
        $validated = $this->validateRequest($request);
    
        try {
            // Cari data Pengaturan berdasarkan ID
            $pengaturan = Pengaturan::find($id);
    
            // Jika data tidak ditemukan, buat data baru
            if (!$pengaturan) {
                $pengaturan = Pengaturan::create($validated);
            } else {
                // Jika data ditemukan, lakukan pembaruan
                $pengaturan->update($validated);
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
            'image' => 'nullable',
            'map' => 'nullable',
        ]);
    }
}