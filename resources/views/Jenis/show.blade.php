@extends('jeniss.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show Jenis</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('jeniss.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{{ $jenis->nama_jenis }}
</div>
</div>
<strong>Details:</strong>
{{ $jenis->details }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
@endsection
