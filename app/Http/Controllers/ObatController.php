<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;


class ObatController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = obat::all();
        return view('obat.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        obat::create([
            'namao' => $request->namao,
            'stok' => $request->stok,
            'harga' => $request->harga,
            
        ]);

        return redirect('obat');
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
        $row = obat::find($id);
        return view('obat.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = obat::findOrFail($id);

        $row->update([
            'namao' => $request->namao,
            'stok' => $request->stok,
            'harga' => $request->harga,
            
        ]);

        return redirect('obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = obat::findOrFail($id);

        $row->delete();

        return redirect('obat');
    }
}
