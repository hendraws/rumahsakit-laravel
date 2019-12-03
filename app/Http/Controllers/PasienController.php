<?php

namespace App\Http\Controllers;

use App\Imports\PasienImport;
use App\Pasien;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pasien = Pasien::latest()->get();
        return view('pasien.index',compact('pasien'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store()
    {

        // validate
        $attr = request()->validate([
            'nik'           => 'required|unique:pasien|min:16|max:16|regex:(\d{16})',
            'nama'          => 'required|regex:([a-z ]+)',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            'no_telp'       => 'required|min:6|max:16|regex:(\d{6,16})',
        ]);

        $attr['slug'] = \Str::slug(request('nama')) . '-' . \Str::random(10);
        Pasien::create($attr);

        return redirect()->route('pasien')->with('status', 'Data Pasien Berhasil Ditambahkan');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien')->with('status', 'Data Pasien Berhasil Dihapus');
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Pasien $pasien)
    {


        // validate
        $attr = request()->validate([
            // 'nik'           => 'required',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            'no_telp'       => 'required',
        ]);

        $attr['slug'] = \Str::slug(request('nama')) . '-' . \Str::random(10);
        $pasien->update($attr);

        return redirect()->route('pasien')->with('status', 'Data Pasien Berhasil Di Update');

    }

    public function show(Pasien $pasien)
    {
        $rekammedis = $pasien->rekammedis;
        return view('pasien.show', compact('pasien','rekammedis'));
    }

    public function upload()
    {
        return view('pasien.upload');
    }
    
    public function importexcel(Request $request)
    {
        Excel::import(new PasienImport,$request->file('data_pasien'));
        // dd($request->all());
        return redirect()->route('pasien')->with('status', 'Data Pasien Berhasil Di Import');
    }
}
