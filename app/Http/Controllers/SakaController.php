<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SakaController extends Controller
{
    // Merespons GET /api/saka
    public function index()
    {
        // Mocking Data Sederhana (sesuai format AllSakaResponse.kt)
        return response()->json([
            'error' => false,
            'message' => 'Daftar produk dimuat (API LIVE)',
            'listSaka' => [] // Kirim array kosong untuk saat ini
        ]);
    }
    
    // Anda juga perlu menambahkan fungsi 'show' dan 'store' di sini
}