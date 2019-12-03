@extends('layouts.master')
@section('title', 'Tambah Obat')
@section('header', 'Tambah Obat')
@section('content')

<!-- Basic Card Example -->
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('obat')}}" class="btn btn-warning btn-sm mr-3 mb-3">&lt;&lt; Kembali</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Obat</h6>
    </div>
    <div class="card-body">
        <div class="col-md-8 ml-5">

            <form method="post" action="{{route('obat.edit', $obat)}}">
                @csrf
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <textarea type="text" class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat" name="nama_obat">{{ $obat->nama_obat }}</textarea>
                    {!! $errors->first('nama_obat','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $obat->keterangan }}">
                    {!! $errors->first('keterangan','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group pull-right">
                    <button type="submit" id="simpan" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection