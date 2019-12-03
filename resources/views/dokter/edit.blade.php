@extends('layouts.master')
@section('title', 'Tambah Dokter')
@section('header', 'Tambah Dokter')
@section('content')

<!-- Basic Card Example -->
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('dokter')}}" class="btn btn-warning btn-sm mr-3 mb-3">&lt;&lt; Kembali</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Dokter</h6>
    </div>
    <div class="card-body">
        <div class="col-md-8 ml-5">

            <form method="post" action="{{route('dokter.edit', $dokter)}}">
                @csrf
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" autofocus="" value="{{ $dokter->nip }}" disabled>
                    {!! $errors->first('nip','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="nama_dokter">Nama Dokter</label>
                    <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" id="nama_dokter" name="nama_dokter" value="{{ $dokter->nama_dokter }}">
                    {!! $errors->first('nama_dokter','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" class="form-control @error('spesialis') is-invalid @enderror" id="spesialis" name="spesialis" value="{{ $dokter->spesialis }}">
                    {!! $errors->first('spesialis','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ $dokter->alamat }}</textarea>
                    {!! $errors->first('alamat','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" id="telp" name="no_telp" maxlength="12" pattern="[0-9]+" value="{{ $dokter->no_telp }}">
                    {!! $errors->first('no_telp','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group pull-right">
                    <button type="submit" id="simpan" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection