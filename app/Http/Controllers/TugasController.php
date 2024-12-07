<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tugass = Tugas::paginate(8);
        return view('tugass.index', compact('tugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tugass.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul' => 'required|max:60',
            'subjudul' => 'required|max:100',
            'kategori' => 'required',
            'deadline' => 'required|date',
            'deskripsi' => 'required'
        ]);
        Tugas::create($request->all());
        return redirect()->route('tugass.index')->with('success', 'Tugas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tugas $tugas)
    {
        //
         return view('tugass.show', compact('tugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tugas $tugas)
    {
        //
        return view('tugass.edit', compact('tugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tugas $tugas)
    {
        //
        $request->validate([
            'judul' => 'required|max:60',
            'subjudul' => 'required|max:100',
            'kategori' => 'required',
            'deadline' => 'required|date',
            'deskripsi' => 'required'
        ]);
        $tugas->update($request->all());
        return redirect()->route('tugass.index')->with('success', 'Tugas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tugas $tugas)
    {
        //
        $tugas->delete();
        return redirect()->route('tugass.index')->with('success', 'Tugas berhasil dihapus');
    }
}
