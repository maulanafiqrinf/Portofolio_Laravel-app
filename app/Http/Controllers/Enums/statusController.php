<?php

namespace App\Http\Controllers\Enums;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status as statusMedia;

class statusController extends Controller
{
    public function index()
    {
        $paramsData = [
            'status' => statusMedia::all(),
            'title' => 'Status',
        ];
        return view('backoffice.status.index', $paramsData);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
    
        $laststatus = statusMedia::latest()->first();
        $newKodestatus = 'KS' . ($laststatus ? (intval(substr($laststatus->kd_status, 2)) + 1) : 1);

        statusMedia::create([
            'kd_status' => $newKodestatus,
            'name' => $request->name
        ]);
        return redirect()->route('status.index')->with('success', 'Data berhasil disimpan.');
    }

    public function destroy($kd_status)
    {
        try {
            statusMedia::find($kd_status)->delete();
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
