@extends('jeniss.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('jenis.create') }}"> Create New Jenis</a>
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
<th>Name</th>
<th>Details</th>
<th width="280px">Action</th>
</tr>


@foreach ($jensis as $jenis)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $jenis->nama_jenis }}</td>
<td>{{ $jenis->details }}</td>
<td>
<form action="{{ route('jeniss.destroy',$jenis->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('jeniss.show',$jenis->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('jeniss.edit',$jenis->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $jeniss->links() !!}
@endsection