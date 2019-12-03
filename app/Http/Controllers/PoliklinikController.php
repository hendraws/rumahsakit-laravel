<?php

namespace App\Http\Controllers;

use App\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $poliklinik = Poliklinik::latest()->get();

        return view('poliklinik.index', compact('poliklinik'));
    }

    public function create()
    {
        return view('poliklinik.create');
    }

    public function store()
    {

        $attr = request()->validate([
            'nama_poli' => 'required|regex: ([a-z ]+)|unique:poliklinik',
            'gedung'   => 'required|regex: ([a-z ]+)',
        ]);
        $attr['slug'] = \Str::slug(request('nama_poli')) . '-' . \Str::random(10);
        Poliklinik::create($attr);

        return redirect()->route('poliklinik')->with('status', 'Data Poliklinik Berhasil Ditambahkan');
    }

    public function destroy(Poliklinik $poliklinik)
    {
        $poliklinik->delete();

        return redirect()->route('poliklinik')->with('status', 'Data Poliklinik Berhasil Dihapus');
    }

    public function edit(Poliklinik $poliklinik)
    {
        return view('poliklinik.edit', compact('poliklinik'));
    }

    public function update(Poliklinik $poliklinik)
    {


        // validate
        $attr = request()->validate([
            'nama_poli' => 'required|regex: ([a-z ]+)',
            'gedung'   => 'required|regex: ([a-z ]+)',
        ]);
        $attr['slug'] = \Str::slug(request('nama_poli')) . '-' . \Str::random(10);
        $poliklinik->update($attr);

        return redirect()->route('poliklinik')->with('status', 'Data Poliklinik Berhasil Di Update');
    }
}
