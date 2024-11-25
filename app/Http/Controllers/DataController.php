<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Kategori;

class DataController extends Controller
{
    public function index()
    {
        $kategoris = Data::with('kategori')->get();
        return view('posts.index', compact('users'));
    }

    public function create()
    {
        $kategoris = Kategori::all(); // Mengambil semua kategori
        return view('posts.create', compact('kategoris')); // Kirimkan $kategoris ke view
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'kategori_id' => 'nullable|exists:kategoris,id',  // Ganti 'categories' menjadi 'kategoris'
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi berhasil, lanjutkan dengan penyimpanan data.
        $user = new Data();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->kategori_id = $request->kategori_id;

        // Menyimpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $user->image = basename($imagePath);
        }

        $user->save();

        return redirect()->route('posts.index')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = Data::findOrFail($id);
        $kategoris = Kategori::all();
        return view('posts.edit', compact('user', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'kategori_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Data::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->kategori_id = $request->kategori_id;

        if ($request->hasFile('image')) {
            $user->image = $request->file('image');
        }

        $user->save();
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $user = Data::findOrFail($id);
        $user->delete();
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $user = Data::with('kategori')->findOrFail($id);
        return view('posts.show', compact('user'));
    }
}
