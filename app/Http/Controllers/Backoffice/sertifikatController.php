<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sertifikat;
use App\Models\Status;
use Illuminate\Http\JsonResponse;

class sertifikatController extends Controller
{
    /**
     * Menampilkan daftar sertifikat
     */
    public function index()
    {
        $paramsData = [
            'sertifikat' => Sertifikat::all(),
            'title' => 'Sertifikat',
        ];
        
        return view('backoffice.sertifikat.index', $paramsData);
    }

    /**
     * Menampilkan form tambah sertifikat
     */
    public function create()
    {   
        $paramsData = [
            'title' => 'Tambah Sertifikat',
            'statuses' => Status::all()
        ];
        return view('backoffice.sertifikat.create',$paramsData);
    }

    /**
     * Menyimpan data sertifikat baru
     */

    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            Sertifikat::create($validated);
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
     * Menampilkan form edit sertifikat
     */

    public function edit(int $id)
    {
        $paramsData = [
            'title' => 'Edit Sertifikat',
            'statuses' => Status::all(),
            'sertifikat' => Sertifikat::findOrFail($id)
        ];
        return view('backoffice.sertifikat.edit', $paramsData);
    }

    /**
     * Update data sertifikat
     */

    public function update(Request $request, int $id): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            Sertifikat::findOrFail($id)->update($validated);
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
     * Menghapus data sertifikat
     */

    public function destroy(int $id): JsonResponse
    {
        try {
            Sertifikat::findOrFail($id)->delete();
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
     * Validasi request
     */

    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string'],
            'pihak' => 'nullable',
            'deskripsi' => 'nullable',
            'image' => 'nullable',
            'link' =>  'nullable',
            'start_date' => 'nullable',
            'completion_date' => 'nullable',
            'kd_status' => 'required'
        ]);
    }
}
