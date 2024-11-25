<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    // Menyimpan kategori
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:kategoris,name',
        ]);

        Kategori::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.create')->with('success', 'Category created successfully!');
    }
}
