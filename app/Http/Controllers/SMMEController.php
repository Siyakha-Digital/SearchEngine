<?php

namespace App\Http\Controllers;

use App\Models\SMME;
use Illuminate\Http\Request;

class SMMEController extends Controller
{
    public function index()
    {
        $smmes = SMME::all();
        return view('smmes.index', compact('smmes'));
    }

    public function show($id)
    {
        $smme = SMME::findOrFail($id);
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
            'slogan' => 'required',
            'image' => 'required|image', // Added validation for image file
            'category' => 'required|array', // Ensuring category is an array
            'category.*' => 'required|string' // Ensuring each category is a string
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('images', 'public');

        $smme = SMME::create([
            'name' => $request->name,
            'slogan' => $request->slogan,
            'image' => $imagePath,
            'category' => json_encode($request->category), // Encode category array to JSON
            'description' => $request->description,
            'location' => $request->location,
            'contact_info' => $request->contact_info
        ]);

        return redirect()->route('smmes.index')->with('success', 'SMME created successfully.');
    }

    public function edit($id)
    {
        $smme = SMME::findOrFail($id);
        return view('smmes.edit', compact('smme'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slogan' => 'required',
            'image' => 'nullable|image', // Optional image validation
            'category' => 'required|array', // Ensuring category is an array
            'description' => 'required|max:65535',
            'location' => 'required',
            'contact_info' => 'required',
        ]);

        $smme = SMME::findOrFail($id);

        // Handle file upload if a new image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $smme->image = $imagePath;
        }

        $smme->update([
            'name' => $request->name,
            'slogan' => $request->slogan,
            'category' => json_encode($request->category), // Encode category array to JSON
            'description' => $request->description,
            'location' => $request->location,
            'contact_info' => $request->contact_info
        ]);

        return redirect()->route('smmes.index')->with('success', 'SMME updated successfully.');
    }

    public function destroy($id)
    {
        $smme = SMME::findOrFail($id);
        $smme->delete();
        return redirect()->route('smmes.index')->with('success', 'SMME deleted successfully.');
    }
}
