<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Kategori;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::with('kategori')->get();
        return view('posts.index', compact('data'));
    }

    public function create()
    {
        $data = Kategori::all();
        return view('posts.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:data,email',
            'kategori_id' => 'nullable|exists:kategoris,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = new Data();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->kategori_id = $request->kategori_id;

        if ($request->hasFile('image')) {
            $data->image = $request->file('image')->store('public/images');
        }

        $data->save();

        return redirect()->route('users.index')->with('success', 'Data created successfully');
    }

    public function edit($id)
    {
        $user = Data::findOrFail($id);
        $kategoris = Kategori::all();
        return view('posts.edit', compact('user', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:data,email,' . $id,
            'kategori_id' => 'nullable|exists:kategoris,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = Data::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->kategori_id = $request->kategori_id;

        if ($request->hasFile('image')) {
            $data->image = $request->file('image')->store('public/images');
        }

        $data->save();
        return redirect()->route('users.index')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();
        return redirect()->route('users.index')->with('success', 'Data deleted successfully');
    }

    public function show($id)
    {
        $user = Data::with('kategori')->findOrFail($id);
        return view('posts.show', compact('user'));
    }
}
