@extends('layouts.master')
@section('title', 'Tambah Pasien')
@section('header', 'Tambah Pasien')
@section('content')

<!-- Basic Card Example -->
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('pasien')}}" class="btn btn-warning btn-sm mr-3 mb-3">&lt;&lt; Kembali</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data pasien</h6>
    </div>
    <div class="card-body">
        <div class="col-md-8 ml-5">

            <form method="post" action="{{route('pasien.edit', $pasien)}}">
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" autofocus="" value="{{ $pasien->nik }}" disabled>
                    {!! $errors->first('nik','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="nama">Nama pasien</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $pasien->nama }}">
                    {!! $errors->first('nama','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="spesialis">Jenis Kelamin</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk1" value="L" {{ $pasien->jenis_kelamin == 'L' ? "checked" : ''  }}>
                            <label class="form-check-label" for="jk1">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk2" value="P" {{ $pasien->jenis_kelamin == 'P' ? "checked" : ''  }}>
                            <label class="form-check-label" for="jk2">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ $pasien->alamat }}</textarea>
                    {!! $errors->first('alamat','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" id="telp" name="no_telp" maxlength="12" pattern="[0-9]+" value="{{ $pasien->no_telp }}">
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