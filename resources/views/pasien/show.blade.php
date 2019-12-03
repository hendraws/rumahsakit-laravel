@extends('layouts.master')
@section('title', 'Rekammedis')
@section('header', 'Rekammedis')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-sm-12 text-right">
                <a href="{{route('pasien')}}" class="btn btn-primary mb-3 mr-3">Tambah Rekammedis</a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-header py-3">
                <h5 class="m-0">Data Rekammedis <span class="text-primary">{{ $pasien->nama}}</span></h5>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="rekamMedis" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal Periksa</th>
                                <th>Keluhan</th>
                                <th>Nama Dokter</th>
                                <th>Dignosa</th>
                                <th>Poliklinik</th>
                                <th>Data Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rekammedis as $datas)
                            <tr>
                                <td>{{ $datas->created_at }}</td>
                                <td>{{ $datas->keluhan }}</td>
                                <td>{{ isset($datas->dokter->nama_dokter) ? $datas->dokter->nama_dokter : ""  }}</td>
                                <td>{{ $datas->diagnosa }}</td>
                                <td>{{ isset($datas->poliklinik->nama_poli) ? $datas->poliklinik->nama_poli : ""   }}</td>
                                <td>
                                    @foreach($datas->obat as $data)
                                    {{$data->nama_obat}}<br>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection