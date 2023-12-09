@extends('layouts.appbo')

@section('content_title', 'Mater Kegiatan')

@section('toolbar')

<!-- button back -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('mastersubcategory.index') }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<!-- button edit -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('mastersubcategory.edit', ['mastersubcategory' => $viewModel->data->id]) }}">
        <i class="fas fa-lg fa-edit"></i>
    </a>
</li>

<!-- button delete -->
<li class="nav-item">
    <a onclick="event.preventDefault(); document.getElementById('frmData').submit();"
       class="nav-link" href="#">
        <i class="fas fa-lg fa-trash"></i>
    </a>
    <form id="frmData" role="form" id="frmData" method="POST" action="{{ route('mastersubcategory.destroy', ['mastersubcategory' => $viewModel->data->id]) }}">
        @csrf
        @method('DELETE')
    </form>
</li>


@endsection

@section('content')
    @include('bo.mastersubcategory.data-field-items')
@endsection

@section('style')

    <!-- Styles -->
    <!-- <link href="{{ asset('css/CustomForShow.css') }}" rel="stylesheet"> -->

@endsection

@section('js')

    <!-- javascript -->
    <!-- <script src="{{ asset('js/CustomForShow.js') }}" defer></script> -->

@endsection

