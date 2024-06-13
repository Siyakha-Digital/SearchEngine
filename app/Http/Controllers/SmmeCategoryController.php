<?php

namespace App\Http\Controllers;

use App\Models\Smme;
use Illuminate\Http\Request;

class SmmeController extends Controller
{
    public function index()
    {
        return Smme::with('categories')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add validation for other fields if necessary
        ]);

        return Smme::create($request->all());
    }

    public function show($id)
    {
        return Smme::with('categories')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add validation for other fields if necessary
        ]);

        $smme = Smme::findOrFail($id);
        $smme->update($request->all());

        return $smme;
    }

    public function destroy($id)
    {
        $smme = Smme::findOrFail($id);
        $smme->delete();

        return response()->noContent();
    }

    public function addCategory(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
        ]);

        $smme = Smme::findOrFail($id);
        $smme->categories()->attach($request->category_id);

        return response()->noContent();
    }

    public function removeCategory(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
        ]);

        $smme = Smme::findOrFail($id);
        $smme->categories()->detach($request->category_id);

        return response()->noContent();
    }
}
