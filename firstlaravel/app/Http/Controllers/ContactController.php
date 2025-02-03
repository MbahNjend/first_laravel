<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    // Menampilkan form kontak
    public function showForm()
    {
        return view('contact');
    }

    // Menangani pengiriman form
    public function submitForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke database atau kirim email (opsional)
        // Contoh: Simpan ke database
        // Contact::create($request->all());

        // Set session untuk pesan sukses
        Session::flash('success', 'Success Submit!');

        // Redirect kembali ke halaman form
        return redirect()->route('contact.show');
    }
}
