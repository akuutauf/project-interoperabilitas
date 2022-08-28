{{-- extend layout from master --}}
@extends('admin.layout.master')

{{-- Include Header --}}
@section('title')
    <title>Manajemen Panel | Interoperabilitas</title>
@endsection

{{-- Include Section for Content --}}
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Manajamen Data Admin</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Manajemen Data Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success py-1">Success</span>&ensp; {{ Auth::user()->name }}, Kamu
                berhasil
                masuk ke
                panel Manajemen
                Data Admin
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
                            id="dropdownMenuButton1" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="/kategori">Manajemen Kategori</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">{{ $kategori }}</span>
                    </h4>
                    <div class="p-3">
                        <i class="fa-solid fa-bookmark fs-50"></i>
                    </div>
                    <div>
                        <p class="text-light">Manajemen Kategori</p>
                    </div>
                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
                            id="dropdownMenuButton1" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="/tugas">Manajemen Tugas</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">{{ $tugas }}</span>
                    </h4>
                    <div class="p-3">
                        <i class="fa-solid fa-book fs-50"></i>
                    </div>
                    <div>
                        <p class="text-light">Manajemen Tugas</p>
                    </div>
                </div>

            </div>
        </div>
        <!--/.col-->
    </div>
@endsection
