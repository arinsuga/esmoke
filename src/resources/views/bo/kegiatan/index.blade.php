@extends('layouts.appbo')

@section('content_title', 'Master Kegiatan')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('kegiatan.create') }}">
        <i class="fas fa-lg fa-plus"></i>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" href="#" >
        <i class="fas fa-lg fa-filter"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('bo.kegiatan.data-list-filters')
    </div>
@endsection

@section('content')

        <div style="margin-top: 10px;">
            @include('bo.kegiatan.data-list-items')
        </div>

@endsection

@section('js')

    <script src="{{ asset('js/CustomForIndex.js') }}" defer></script>

@endsection
