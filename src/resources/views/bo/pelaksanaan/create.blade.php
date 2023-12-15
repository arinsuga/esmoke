@extends('layouts.appbo')

@section('content_title', 'Tambah Pelaksanaan Kegiatan')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('pelaksanaan.index') }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<li class="nav-item">
    <a onclick="event.preventDefault(); document.getElementById('frmData').submit();"
       class="nav-link" href="#">
        <i class="fas fa-lg fa-save"></i>
    </a>
</li>

@endsection


@section('content')

<form role="form" id="frmData" method="POST" action="{{ route('pelaksanaan.store') }}" enctype="multipart/form-data">
    @csrf

    <div style="display: flex; justify-content=center;">
        @include('bo.pelaksanaan.data-field-items')
    </div>
</form>

@endsection

@section('js')

    @include('bo.pelaksanaan._script')

@endsection
