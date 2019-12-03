@extends('layouts.master')
@section('title', 'Rekammedis')
@section('header', 'Rekammedis')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-sm-12 text-right">
                <a href="{{route('rekammedis.create')}}" class="btn btn-primary mb-3 mr-3">Tambah Rekammedis</a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Data Rekammedis</h5>
            </div>

            @if (session('status'))
            <div class="row text-center justify-content-center mt-3">
                <div class="col-md-10">

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @endif

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Filter Tanggal</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="min" id="min" autocomplete="off" placeholder="Dari Tanggal">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="max" id="max" placeholder="sampai tanggal">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="rekamMedis" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Keluhan</th>
                                <th>Nama Dokter</th>
                                <th>Dignosa</th>
                                <th>Poliklinik</th>
                                <th>Obat</th>
                                <th>Aksi</th>
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
                                <td class="text-center">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#{{ $datas->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="{{ $datas->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $datas->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{ $datas->id }}Label">Apakah Anda Yakin Ingin Mengapus?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('rekammedis.delete', $datas) }}" method="post">
                                                        @csrf
                                                        <button type="button" class="btn btn-secondary mx-3" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger mx-3">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection