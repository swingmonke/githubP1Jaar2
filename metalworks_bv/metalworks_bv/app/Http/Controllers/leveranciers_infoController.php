<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendor;

class leveranciers_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leveranciers = vendor::all();
        return view('leveranciers_info.index', compact('leveranciers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leveranciers_info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bedrijfsnaam' => 'required|string|max:255',
            'contactpersoon' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefoonnummer' => 'required|string|max:20',
            'adres' => 'required|string|max:255',
            'postcode' => 'required|string|max:10',
            'plaats' => 'required|string|max:100',
            'land' => 'required|string|max:100',
            'kvk_nummer' => 'nullable|string|max:50',
            'btw_nummer' => 'nullable|string|max:50',
            'bankrekening' => 'nullable|string|max:50',
        ]);

        vendor::create($request->all());

        return redirect()->route('leveranciers_info.index')
            ->with('success', 'Leverancier succesvol toegevoegd.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $leveranciers = vendor::findOrFail($id);
        return view('leveranciers_info.show', compact('leveranciers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
