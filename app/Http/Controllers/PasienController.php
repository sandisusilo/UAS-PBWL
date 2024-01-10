<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pasien::all();
        return view('pasien.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pasien::create([
            'namap' => $request->namap,
            'kelamin' => $request->kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,

            
        ]);

        return redirect('pasien');
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
        $row = Pasien::find($id);
        return view('pasien.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pasien::findOrFail($id);

        $row->update([
            'namap' => $request->namap,
            'kelamin' => $request->kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,

        ]);

        return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pasien::findOrFail($id);

        $row->delete();

        return redirect('pasien');
    }
}
