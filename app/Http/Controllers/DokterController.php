<?php

namespace App\Http\Controllers;

use App\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $dokter = Dokter::latest()->get();
        return view('dokter.index', compact('dokter'));
    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store()
    {
       
        $attr = request()->validate([
            'nip'         => 'required|unique:dokter|min: 18|max: 18|regex: (\d{18})',
            'nama_dokter' => 'required|regex: ([a-z ]+)',
            'spesialis'   => 'required|regex: ([a-z ]+)',
            'alamat'      => 'required',
            'no_telp'     => 'required|min  : 6|max: 16|regex: (\d{6,16})',
        ]);
        $attr['slug'] = \Str::slug(request('nama_dokter')) . '-' . \Str::random(10);
        Dokter::create($attr);

        return redirect()->route('dokter')->with('status', 'Data Dokter Berhasil Ditambahkan');
    }

    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('dokter')->with('status', 'Data Dokter Berhasil Dihapus');
    }

    public function edit(Dokter $dokter)
    {
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Dokter $dokter)
    {


        // validate
        $attr = request()->validate([
            // 'nip'         => 'required|unique:dokter|min: 18|max  : 18|regex: (\d{18})',
            'nama_dokter' => 'required|regex: ([a-z ]+)',
            'spesialis'   => 'required|regex: ([a-z ]+)',
            'alamat'      => 'required',
            'no_telp'     => 'required|min  : 6|max: 16|regex: (\d{6,16})',
        ]);
        $attr['slug'] = \Str::slug(request('nama_dokter')) . '-' . \Str::random(10);
        $dokter->update($attr);

        return redirect()->route('dokter')->with('status', 'Data Dokter Berhasil Di Update');
    }
}
