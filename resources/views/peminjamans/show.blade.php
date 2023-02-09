@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('peminjamans.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Peminjam:</strong>
                {{ $peminjaman->nama_peminjam }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Barang Pinjam:</strong>
                {{ $peminjaman->barang_pinjam }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Barang Pinjam:</strong>
                {{ $peminjaman->tgl_pinjam }}
            </div>
        </div>
    </div>
@endsection
