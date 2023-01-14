<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObatMasuk;
use App\Models\ObatKeluar;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function tambahObat(Request $request)
    {
        $data = $request->all();
        // $data[] = ['tanggal_masuk' => date("Y-m-d")];

        ObatMasuk::create($data);

        return response()->json($data);
    }

    public function kurangObat(Request $request)
    {
        $data = $request->all();
        $data['tanggal_keluar'] = date("Y-m-d");

        ObatKeluar::create($data);

        return response()->json($data);
    }
}
