@extends('admin.layout.master')

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tugas</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Tugas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h3>Tugas</h3>
            </div>
            <a href="/">
                <button class="btn btn-sm btn-outline-success mr-auto col-sm-2" style="width: 100px;">Tambah
                    <i class="fa fa-plus"></i>
                </button>
            </a>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive"
                                class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th width="50px">No.</th>
                                        <th width="500px">Nama Mata Kuliah</th>
                                        <th width="500x">Nama Tugas</th>
                                        {{-- <th width="50px">Nama</th>
                                        <th width="50px">Penulis</th>
                                        <th width="50px">Jumlah Halaman</th> --}}
                                        {{-- <th width="840px">Deskripsi</th> --}}
                                        {{-- <th width="50px">Opsi</th> --}}

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $kategoris)
                                        <tr>
                                            <td>1.</td>
                                            <td>Interopabilitas</td>
                                            <td>Tugas Api Login & Register</td>

                                            <td>
                                                <a href="/">
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                                <a href="">
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
