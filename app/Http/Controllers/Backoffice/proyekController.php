<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyek;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Http\JsonResponse;

class proyekController extends Controller
{
    /**
     * Menampilkan daftar proyek
     */
    public function index()
    {
        $paramsData = [
            // 'proyek' => Proyek::with('kategori')
            //     ->get()
            //     ->filter(function ($item) {
            //         return optional($item->kategori)->name === 'Pengalaman' || !$item->kategori;
            //     }),
            'proyek' => Proyek::all(),
            'title' => 'Proyek dan Pengalaman',
        ];
        
        return view('backoffice.proyek.index', $paramsData);
    }

    /**
     * Menampilkan form tambah proyek
     */
    public function create()
    {
        return view('backoffice.proyek.create', [
            'title' => 'Tambah Proyek dan Pengalaman',
            'statuses' => Status::all(),
            'categories' => Kategori::all()
        ]);
    }

    /**
     * Menyimpan data proyek baru
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            Proyek::create($validated);
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
     * Menampilkan form edit proyek
     */
    public function edit(int $id)
    {
        return view('backoffice.proyek.edit', [
            'title' => 'Edit Proyek dan Pengalaman',
            'proyek' => Proyek::findOrFail($id),
            'statuses' => Status::all(),
            'categories' => Kategori::all()
        ]);
    }

    /**
     * Update data proyek
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            $proyek = Proyek::findOrFail($id);
            $proyek->update($validated);
            
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
     * Hapus data proyek
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            Proyek::findOrFail($id)->delete();
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
            'position' => 'nullable',
            'pihak' => 'nullable',
            'technology' => 'nullable',
            'deskripsi' => 'nullable',
            'jobdesk' => 'nullable',
            'image' => 'nullable',
            'image2' => 'nullable',
            'image3' => 'nullable',
            'link' => 'nullable',
            'start_date' => 'nullable|date',
            'completion_date' => 'nullable|date',
            'kd_status' => 'required',
            'kd_kategori' => 'required'
        ]);
    }
}