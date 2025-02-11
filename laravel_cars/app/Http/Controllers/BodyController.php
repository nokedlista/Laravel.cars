<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index()
    {
        $bodies = Body::all();
        return view('bodies.index', compact('bodies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bodies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bodies = new Body();
        $bodies->name = $request->input('name');
        $bodies->save();

        return redirect()->route('bodies.index')->with('success', "{$bodies->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bodies = Body::find($id);
        return view('bodies.show', compact('bodies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bodies = Body::find($id);
        return view('bodies.edit', compact('bodies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bodies = Body::find($id);
        $bodies->name = $request->input('name');
        $bodies->save();

        return redirect()->route('bodies.index')->with('success', "{$bodies->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bodies = Body::find($id);
        $bodies->delete();

        return redirect()->route('bodies.index')->with('success', "Sikeresen törölve");
    }
}