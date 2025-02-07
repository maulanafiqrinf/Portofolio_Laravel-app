<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendidikan;
use App\Models\Status;
use Illuminate\Http\JsonResponse;

class pendidikanController extends Controller
{
    /**
     * Menampilkan daftar pendidikan
     */

    public function index()
    {
        $paramsData = [
            'pendidikan' => Pendidikan::all(),
            'statuses' => Status::all(),
            'title' => 'Pendidikan',
        ];
        
        return view('backoffice.pendidikan.index', $paramsData);
    }

    /**
     * Menampilkan form tambah pendidikan
     */
    public function create()
    {
        $paramsData = [
            'title' => 'Tambah Pendidikan',
            'statuses' => Status::all()
        ];
        return view('backoffice.pendidikan.create',$paramsData);
    }

    /**
     * Menyimpan data pendidikan baru
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            Pendidikan::create($validated);
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
     * Menampilkan form edit pendidikan
     */
    public function edit($id)
    {
        $paramsData =[
            'pendidikan' => Pendidikan::findOrFail($id),
            'statuses' => Status::all(),
            'title' => 'Edit Pendidikan'
        ];
        return view('backoffice.pendidikan.edit', $paramsData);
    }

    /**
     * Menyimpan data pendidikan yang diedit
     */

    public function update(Request $request, $id): JsonResponse
    {
        $validated = $this->validateRequest($request);
        
        try {
            Pendidikan::findOrFail($id)->update($validated);
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
     * Menghapus data pendidikan
     */

    public function destroy(int $id): JsonResponse
    {
        try {
            Pendidikan::findOrFail($id)->delete();
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
            'name' => 'required',
            'jurusan' => 'nullable',
            'deskripsi' => 'nullable',
            'link' => 'nullable',
            'start_date' => 'nullable',
            'completion_date' => 'nullable',
            'kd_status' => 'required'
        ]);
    }
}
