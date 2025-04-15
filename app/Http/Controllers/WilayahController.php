<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WilayahController extends Controller
{

    public function showWilayah()
    {
        $response = Http::withOptions([
            'verify' => 'C:\xampp2\php\extras\ssl\cacert.pem'
        ])->get('https://raw.githubusercontent.com/farizdotid/DAFTAR-API-LOKAL-INDONESIA/master/data/location/id.json');

        if ($response->successful()) {
            $data = $response->json();
            $provinsi = $data['provinsi'] ?? []; // Untuk menghindari error jika key tidak ada

            return view('wilayah', compact('provinsi'));
        } else {
            return view('wilayah', ['provinsi' => []]);
        }
    }

    public function getProvinsiAPI()
    {
        $response = Http::withOptions([
            'verify' => 'C:\xampp2\php\extras\ssl\cacert.pem'
        ])->get('https://raw.githubusercontent.com/farizdotid/DAFTAR-API-LOKAL-INDONESIA/master/data/location/id.json');
        
if ($response->successful()) {
        $provinsi = $response->json();

        //return view('provinsi', compact('provinsi'));
        return response()->json([
            'status' => true,
            'data' => $provinsi
        ]);
    }else {
        return response()->json([
            'status' => false,
            'message' => 'Gagal mengambil data dari GitHub.'
        ], 500);
    }
  }
}
