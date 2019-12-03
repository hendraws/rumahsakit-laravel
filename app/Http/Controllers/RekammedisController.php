<?php

namespace App\Http\Controllers;

use App\Rekammedis;
use App\Dokter;
use App\Poliklinik;
use App\Pasien;
use App\Obat;
use App\Obat_rekammedis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class RekammedisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    public function index()
    {
        //    $data = Rekammedis::join();
        //     // dd($data);
        // //    return response()->json(['data'=>$row]);
        //     return view('rekammedis.index', compact('data'));
        $rekammedis = Rekammedis::all();
        $data = Rekammedis::all()->count();
        return view('rekammedis.index', compact('rekammedis','data'));
        
    }

    public function create()
    {
        $dokter = Dokter::all();
        $poliklinik = Poliklinik::all();
        $pasien = pasien::all();
        $obat = Obat::all();
        return view('rekammedis.create', compact('dokter','poliklinik','pasien','obat'));
    }

    public function store(Request $request)
    {
        // insert data ke table RekamMedis
        // DB::table('rekammedis')->insert([
        //     'pasien_id' => $request->pasien,
        //     'keluhan' => $request->keluhan,
        //     'dokter_id' => $request->dokter,
        //     'diagnosa' => $request->diagnosa,
        //     'poliklinik_id' => $request->poliklinik
        // ]);

        $rekammedis = new Rekammedis;
        $uuid = Uuid::uuid4()->getHex();
        $rekammedis->id            = $uuid;
        $rekammedis->pasien_id     = request('pasien');
        $rekammedis->keluhan       = request('keluhan');
        $rekammedis->dokter_id     = request('dokter');
        $rekammedis->diagnosa      = request('diagnosa');
        $rekammedis->poliklinik_id = request('poliklinik');
        $rekammedis->save();


        $obat = request('obat');
        foreach($obat as $ob){
            $data                = new Obat_rekammedis;
            $data->rekammedis_id = $uuid;
            $data->obat_id       = $ob;
            $data->save();

        }

        return redirect()->route('rekammedis')->with('status', 'Data RekamMedis Berhasil Ditambahkan');

    }

    public function destroy(Rekammedis $rekammedis)
    {
        $rekammedis->delete();

        return redirect()->route('obat')->with('status', 'Data Obat Berhasil Dihapus');
    }

}
