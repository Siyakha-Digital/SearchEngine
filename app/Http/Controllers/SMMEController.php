<?php

namespace App\Http\Controllers;

use App\Models\SMME;
use Illuminate\Http\Request;

class SMMEController extends Controller
{
    public function index()
    {
        $smmes = Smme::all();
        return view('smmes.index', compact('smmes'));
    }

    public function show($id)
    {
        $smme = Smme::findOrFail($id);
        return view('smmes.show', compact('smme'));
    }

    public function create()
    {
        return view('smmes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'location' => 'required',
            'contact_info' => 'required',
        ]);

        $smme = Smme::create($request->all());
        return redirect()->route('smmes.index')->with('success', 'SMME created successfully.');
    }

    public function edit($id)
    {
        $smme = Smme::findOrFail($id);
        return view('smmes.edit', compact('smme'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'location' => 'required',
            'contact_info' => 'required',
        ]);

        $smme = Smme::findOrFail($id);
        $smme->update($request->all());
        return redirect()->route('smmes.index')->with('success', 'SMME updated successfully.');
    }

    public function destroy($id)
    {
        $smme = Smme::findOrFail($id);
        $smme->delete();
        return redirect()->route('smmes.index')->with('success', 'SMME deleted successfully.');
    }
}