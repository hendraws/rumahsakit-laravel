@extends('layouts.master')
@section('title', 'Dashboard')
@section('header', 'Dashboard')
@section('content')

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{route('pasien')}}">
                            <div class=" font-weight-bold text-primary text-uppercase mb-1">Total Pasien</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $pasien }} <span class="font-weight-light">Pasien</span></div>
                        </a>
                    </div>
                    <div class="col-au text-right">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{route('dokter')}}">
                            <div class=" font-weight-bold text-primary text-uppercase mb-1">Total Dokter</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $dokter }} <span class="font-weight-light">Dokter</span></div>
                        </a>
                    </div>
                    <div class="col-au text-right">
                        <i class="fas fa-user-md fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <a href="">
                        <div class="col mr-2">
                            <a href="{{route('poliklinik')}}">
                                <div class=" font-weight-bold text-primary text-uppercase mb-1">Total Poliklinik</div>
                                <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $poliklinik }} <span class="font-weight-light">Poliklinik</span></div>
                            </a>
                        </div>
                    </a>
                    <div class="col-au text-right">
                        <i class="fas fa-hospital fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <a href="">
                        <div class="col mr-2">
                            <a href="{{route('obat')}}">
                                <div class=" font-weight-bold text-primary text-uppercase mb-1">Total Obat</div>
                                <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $obat }} <span class="font-weight-light">obat</span></div>
                            </a>
                        </div>
                    </a>
                    <div class="col-au text-right">
                        <i class="fas fa-pills fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-primary">
                Data RekamMedis
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Keluhan</th>
                                <th>Nama Dokter</th>
                                <th>Dignosa</th>
                                <th>Poliklinik</th>
                                <th>Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rekammedis as $datas)
                            <tr>
                                <td>{{ $datas->created_at }}</td>
                                <td>{{ $datas->pasien->nama }}</td>
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