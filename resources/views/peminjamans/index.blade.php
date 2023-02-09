@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Peminjaman Alat Elektronik</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peminjamans.create') }}"> Create New peminjaman</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Peminjama</th>
            <th>Barang Pinjaman</th>
            <th>Tanggal Pinjam</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($peminjamans as $peminjaman)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $peminjaman->nama_peminjam }}</td>
                <td>{{ $peminjaman->barang_pinjam }}</td>
                <td>{{ $peminjaman->tgl_pinjam }}</td>
                <td>
                    <form action="{{ route('peminjamans.destroy', $peminjaman->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('peminjamans.show', $peminjaman->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('peminjamans.edit', $peminjaman->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $peminjamans->links() !!}
@endsection

