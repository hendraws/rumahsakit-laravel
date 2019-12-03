@extends('layouts.master')
@section('title', 'Tambah Poliklinik')
@section('header', 'Tambah Poliklinik')
@section('content')

<!-- Basic Card Example -->
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('rekammedis')}}" class="btn btn-warning btn-sm mr-3 mb-3">&lt;&lt; Kembali</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Poliklinik</h6>
    </div>
    <div class="card-body">
        <div class="col-md-8 ml-5">

            <form method="post" action="{{route('rekammedis.create')}}">
                @csrf
                <div class="form-group">
                    <label for="pasien">Pasien</label>
                    <select name="pasien" id="pasien" class="form-control js-example-basic-single" required>
                        <option value="">-- Pilih Pasien --</option>
                        @foreach($pasien as $row)
                        <option value="{{$row->id}}">{{$row->nik}} - {{ $row->nama }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea type="text" class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan" rows="3"></textarea required>
                    {!! $errors->first('keluhan','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="dokter">Dokter</label>
                    <select name="dokter" id="dokter" class="form-control js-example-basic-single" required>
                        <option value="">-- Pilih Dokter --</option>
                        @foreach($dokter as $row)
                        <option value="{{$row->id}}">{{$row->nama_dokter}} - {{ $row->spesialis }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="diagnosa">Diagnosa</label>
                    <textarea type="text" class="form-control @error('diagnosa') is-invalid @enderror" id="diagnosa" name="diagnosa" rows="3" required></textarea>
                    {!! $errors->first('diagnosa','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="poliklinik">Poliklinik</label>
                    <select name="poliklinik" id="poliklinik" class="form-control js-example-basic-single" required>
                        <option value="">-- Pilih Poli --</option>
                        @foreach($poliklinik as $row)
                        <option value="{{$row->id}}">{{$row->nama_poli}} - {{ $row->gedung }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="obat">Obat</label>
                    <select multiple="multiple" class="form-control js-example-basic-multiple" id="obat" name="obat[]" required>
                        @foreach($obat as $row)
                        <option value="{{$row->id}}">{{ $row->nama_obat }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group pull-right">
                    <button type="submit" id="simpan" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection