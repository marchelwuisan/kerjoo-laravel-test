@extends('layouts.app')

{{-- test-flex page extends default layout from app --}}

@section('content')
<div class="container">
    <div class="row">

        {{-- Button group of 3 --}}
        <div class="col-lg col-8 col-sm-12 mb-2">
            <div class="btn-group d-flex justify-content-between"> 
                <button type="button" class="btn btn-primary mr-2">Tambah</button>
                <button type="button" class="btn btn-danger mr-2">Import</button>
                <button type="button" class="btn btn-success">Export</button>
            </div>
        </div>

        {{-- Search text input --}}
        <div class="col-lg col-8 col-sm-6 mb-2">
            <input type="text" class="form-control" placeholder="Search...">
        </div>

        {{-- Year dropdown menu --}}
        <div class="col-lg col-8 col-sm-6 mb-2">
            <div class="dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                    Tahun
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item">2020</a>
                    <a class="dropdown-item">2021</a>
                    <a class="dropdown-item">2022</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection