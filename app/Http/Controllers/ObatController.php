<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $obat = Obat::latest()->get();
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store()
    {

        $attr = request()->validate([
            'nama_obat'  => 'required|regex: ([a-z ]+)|unique:obat',
            'keterangan' => 'required',
        ]);
        $attr['slug'] = \Str::slug(request('nama_obat')) . '-' . \Str::random(10);
        Obat::create($attr);

        return redirect()->route('obat')->with('status', 'Data Obat Berhasil Ditambahkan');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();

        return redirect()->route('obat')->with('status', 'Data Obat Berhasil Dihapus');
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    public function update(Obat $obat)
    {


        // validate
        $attr = request()->validate([
            'nama_obat'  => 'required|regex: ([a-z ]+)',
            'keterangan' => 'required',
        ]);
        $attr['slug'] = \Str::slug(request('nama_obat')) . '-' . \Str::random(10);
        $obat->update($attr);
        return redirect()->route('obat')->with('status', 'Data Obat Berhasil Di Update');
    }
}
