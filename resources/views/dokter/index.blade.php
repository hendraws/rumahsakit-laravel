@extends('layouts.master')
@section('title', 'Dokter')
@section('header', 'Dokter')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-sm-12 text-right">
                <a href="{{route('dokter.create')}}" class="btn btn-primary mb-3 mr-3">Tambah Dokter</a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Data Dokter</h5>
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
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>NIP</th>
                                <th>Nama Dokter</th>
                                <th>Spesialis</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokter as $row)
                            <tr>
                                <td>{{ $row->nip }}</td>
                                <td>{{ $row->nama_dokter }}</td>
                                <td>{{ $row->spesialis }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->no_telp }}</td>
                                <td class="text-center">

                                    <a href="{{ route('dokter.edit', $row) }}" class="btn btn-primary btn-sm">Edit</a>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#{{ $row->nip }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="{{ $row->nip }}" tabindex="-1" role="dialog" aria-labelledby="{{ $row->nip }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{ $row->nip }}Label">Apakah Anda Yakin Ingin Mengapus?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('dokter.delete', $row) }}" method="post">
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
</div>
@endsection