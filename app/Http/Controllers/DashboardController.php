<?php

namespace App\Http\Controllers;
use App\Rekammedis;
use App\Dokter;
use App\Poliklinik;
use App\Pasien;
use App\Obat;
use App\Obat_rekammedis;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$dokter = Dokter::all()->count();
        $poliklinik = Poliklinik::all()->count();
        $pasien = pasien::all()->count();
        $obat = Obat::all()->count();
        $rekammedis = Rekammedis::all();
        return view('dashboard.index', compact('dokter','poliklinik','pasien','obat','rekammedis'));
    }
}
