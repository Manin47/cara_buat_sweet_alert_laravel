<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anggota;

class AnggotaController extends Controller
{
    //
    public function simpan (Request $request) {

        $data = new Anggota;

        $data->nama = $request->nama;

        $data->save();

        return redirect('/')->with('success', 'Data Berhasil Disimpan');

    }
}
