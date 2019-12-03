@extends('layouts.master')
@section('title', 'User')
@section('header', 'User')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-sm-12 text-right">
                <a href="{{route('register')}}" class="btn btn-primary mb-3 mr-3">Tambah User</a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Data User</h5>
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
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama User</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
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