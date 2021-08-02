<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];

        $valid = $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
        ], $messages);

        if($valid){
            Home::create($valid);
            return redirect()->route('home')->with('status', 'Pesan Terkirim');
        }
    }

    public function pesan()
    {
        $pesan = Home::latest()->get();
        return view('pesan.index', compact('pesan'));
    }

}
