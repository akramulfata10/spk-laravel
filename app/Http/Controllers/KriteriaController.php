<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = kriteria::all();
        return view('dashboard.kriteria.index', compact('kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_kriteria' => 'required|max:255|string',
            'attribut' => 'required|string',
            'bobot' => 'required|numeric',
        ]);
        kriteria::create($validateData);
        return redirect(route('kriteria.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $editKriteria = kriteria::findOrFail($id);
        return view('dashboard.kriteria.update', compact('editKriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editKriteria = kriteria::findOrFail($id);
        return view('dashboard.kriteria.update', compact('editKriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = [
            'nama_kriteria' => $request->nama_kriteria,
            'attribut' => $request->attribut,
            'bobot' => $request->bobot,
        ];
        Kriteria::where('id', $id)->update($update);
        return redirect(route('kriteria.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kriteria::destroy($id);
        return redirect(route('kriteria.index'));
    }
}