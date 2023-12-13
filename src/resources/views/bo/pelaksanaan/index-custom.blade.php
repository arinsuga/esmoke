@extends('layouts.appbo')

@section('content_title', 'Daftar Pelaksanaan Kegiatan')

@section('style')

<style>
    
</style>

@endsection

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('pelaksanaan.create') }}">
        <i class="fas fa-lg fa-plus"></i>
    </a>
</li>

<li class="nav-item">
    <a id="btnSubmit" class="nav-link" href="#">
        <i class="fas fa-lg fa-search"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('bo.pelaksanaan.data-list-filters')
    </div>
@endsection

@section('content')

        <nav class="navbar navbar-expand ">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelaksanaan.index') }}" style="font-weight: bold;">
                        All
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelaksanaan.index.today') }}" style="font-weight: bold;">
                        Timeine View
                    </a>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelaksanaan.index.cancel') }}" style="font-weight: bold;">
                        Cancel
                    </a>
                </li> -->

                <li class="nav-item" style="border-bottom: 5px solid red;">
                    <a class="nav-link" href="{{ route('pelaksanaan.index.custom') }}" style="font-weight: bold;">
                        Custom
                    </a>
                </li>

            </ul>

        </nav>

        @if (!isset($viewModel->data->datalist))
        <!-- Form Custom Search -->
        <div>

            <form role="form" id="frmData" method="POST" action="{{ route('pelaksanaan.index.custom.post') }}" enctype="multipart/form-data">
                @csrf

                <div style="display: flex; justify-content=center;">
                    @include('bo.pelaksanaan.index-custom-fields')
                </div>
            </form>

        </div>        
        @endif

        @if (isset($viewModel->data->datalist))
            <div style="margin-top: 10px;">
                @include('bo.pelaksanaan.index-custom-datalist')
            </div>
        @endif


@endsection

@section('js')

    @include('bo.pelaksanaan._script')

@endsection

