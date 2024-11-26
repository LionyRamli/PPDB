<?php

namespace App\Http\Controllers;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapels = Mapel::all();
        return view ('mapel.index', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code_mapel' => 'required',
            'nama_mapel' => 'required',
            'jumlah_jp'=> 'required',
            'nama_guru' => 'required',
        ]);
        Mapel::create($request->all());
        return redirect()->back()->with('message', 'Mapel berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        $request->validate([
            'code_mapel' => 'required',
            'nama_mapel' => 'required',
            'jumlah_jp'=> 'required',
            'nama_guru' => 'required',
        ]);
        $mapel->update($request->all());
        return redirect()->back()->with('message', 'Mapel berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();
        return redirect()->route('mape;.index')->with('message', 'Mapel berhasil dihapus');

    }
}
