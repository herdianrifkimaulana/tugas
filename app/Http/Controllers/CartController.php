<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{ // Menampilkan halaman keranjang// Menampilkan halaman keranjang
    public function index()
    {
        $cart = session()->get('cart', []);

        // Menghitung total harga dan jumlah item
        $total = 0;
        $totalItems = 0; // Variabel untuk jumlah total item
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
            $totalItems += $item['quantity']; // Menambahkan jumlah item
        }

        return view('cart.index', compact('cart', 'total', 'totalItems'));
    }

    // Menambahkan item ke keranjang
    public function add(Request $request)
    {
        $item = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        // Jika item sudah ada di keranjang, tambahkan quantity-nya
        if (isset($cart[$item['id']])) {
            $cart[$item['id']]['quantity'] += $item['quantity'];
        } else {
            $cart[$item['id']] = $item;
        }

        // Menyimpan keranjang kembali ke session
        session()->put('cart', $cart);

        // Menghitung total item untuk update di navbar
        $totalItems = 0;
        foreach ($cart as $cartItem) {
            $totalItems += $cartItem['quantity'];
        }

        session()->put('cart_items_count', $totalItems); // Menyimpan jumlah item di session

        return redirect()->route('cart.index');
    }

    // Menghapus item dari keranjang
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        // Menghitung total item setelah penghapusan
        $totalItems = 0;
        foreach ($cart as $cartItem) {
            $totalItems += $cartItem['quantity'];
        }

        session()->put('cart_items_count', $totalItems); // Update jumlah item di session

        return redirect()->route('cart.index');
    }

    // Halaman checkout
    public function checkout()
    {
        $cart = session()->get('cart', []);

        $total = 0;
        $totalItems = 0; // Menghitung total item
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
            $totalItems += $item['quantity'];
        }

        return view('cart.co', compact('cart', 'total', 'totalItems'));
    }
}
