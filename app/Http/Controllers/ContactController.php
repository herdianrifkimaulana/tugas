<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Tampilkan formulir kontak
    public function showForm()
    {
        return view('contact');
    }

    // Proses pengiriman formulir kontak
    public function handleForm(Request $request)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Kirim email menggunakan ContactMail (sesuaikan pengaturan pengirimannya)
        try {
            Mail::to('admin@email.com')->send(new ContactMail($validatedData));

            // Redirect kembali dengan pesan sukses
            return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Tangani error jika pengiriman email gagal
            return redirect()->route('contact.form')->with('error', 'There was an issue sending your message. Please try again later.');
        }
    }
}
