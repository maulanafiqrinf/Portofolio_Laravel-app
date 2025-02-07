<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Status;
use Illuminate\Http\JsonResponse;

class layananController extends Controller
{
    /**
     * Menampilkan daftar layanan
     */

    public function index()
    {
        $paramsData = [
            'layanan' => Layanan::all(),
            'statuses' => Status::all(),
            'title' => 'Layanan',
        ];
        
        return view('backoffice.layanan.index', $paramsData);
    }

    /**
     * Menampilkan form tambah layanan
     */
    public function create()
    {
        return view('backoffice.layanan.create', [
            'title' => 'Tambah Layanan',
            'statuses' => Status::all()
        ]);
    }

    /**
     * Menyimpan data layanan baru
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            Layanan::create($validated);
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
     * Menghapus data layanan
     */

    public function destroy(int $id): JsonResponse
    {
        try {
            Layanan::findOrFail($id)->delete();
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
            'name' => 'required',
            'deskripsi' => 'nullable',
            'icon' => 'nullable',
            'kd_status' => 'required'
        ]);
    }
}