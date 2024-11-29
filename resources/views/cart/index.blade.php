@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <h2>Keranjang Belanja</h2>

        @if (session()->has('cart') && count(session('cart')) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Item</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ number_format($item['price'], 2) }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                <a href="{{ route('cart.checkout') }}" class="btn btn-success">Lanjutkan ke Checkout</a>
            </div>
        @else
            <p>Keranjang Anda kosong.</p>
        @endif
    </div>
@endsection
