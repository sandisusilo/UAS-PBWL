<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redis;
use App\Models\Pasien;
use App\Models\Obat;

class RedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Redis::with('obat', 'pasien')->get();
        return view('redis.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('redis.create' ,[
            'pasien' => Pasien::get(),
            'obats' => Obat::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Redis::create([
            'id_p' => $request->id_p,                        
            'tgl_periksa' => $request->tgl_periksa,
            'keluhan' => $request->keluhan,
            'tindakan' => $request->tindakan,
            'diagnosa' => $request->diagnosa,
            'r_id_o' => $request->r_id_o,
            
        ]);

        return redirect('redis');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Redis::find($id);
        return view('redis.edit',[
            'pasien' => Pasien::get(),
            'obat' => Obat::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Redis::findOrFail($id);

        $row->update(
            [
            'r_id' => $request->r_id,
            'id_p' => $request->id_p,
            'r_id_o' => $request->r_id_o,            
            'tgl_periksa' => $request->tgl_periksa,
            'keluhan' => $request->keluhan,
            'tindakan' => $request->tindakan,
            'diagnosa' => $request->diagnosa,
        ]
    );

        return redirect('redis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Redis::findOrFail($id);

        $row->delete();

        return redirect('redis');
    }
}
