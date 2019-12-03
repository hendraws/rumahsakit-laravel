@extends('layouts.master')
@section('title', 'Tambah Poliklinik')
@section('header', 'Tambah Poliklinik')
@section('content')

<!-- Basic Card Example -->
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('poliklinik')}}" class="btn btn-warning btn-sm mr-3 mb-3">&lt;&lt; Kembali</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Poliklinik</h6>
    </div>
    <div class="card-body">
        <div class="col-md-8 ml-5">

            <form method="post" action="{{route('poliklinik.edit', $poliklinik)}}">
                @csrf
                <div class="form-group">
                    <label for="nama_poli">Nama Poliklinik</label>
                    <input type="text" class="form-control @error('nama_poli') is-invalid @enderror" id="nama_poli" name="nama_poli" value="{{ $poliklinik->nama_poli }}">
                    {!! $errors->first('nama_poli','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="gedung">Gedung</label>
                    <input type="text" class="form-control @error('gedung') is-invalid @enderror" id="gedung" name="gedung" value="{{ $poliklinik->gedung }}">
                    {!! $errors->first('gedung','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group pull-right">
                    <button type="submit" id="simpan" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection