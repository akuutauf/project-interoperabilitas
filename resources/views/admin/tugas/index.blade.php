{{-- extend layout from master --}}
@extends('admin.layout.master')

@section('title')
    <title>Manajemen Tugas | Interoperabilitas</title>
@endsection

{{-- Include Section for Content --}}
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Manajemen Tugas</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success px-2 py-2">Selamat Datang</span>&ensp;
                        {{ Auth::user()->name }} di
                        Panel Manajemen data tugas
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Data Tugas</strong>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="/create/tugas" class="btn bg-theme btn-border py-2 ml-3 mt-3">Tambah Data Tugas</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="bg-theme">No</th>
                                        <th class="bg-theme">Nama Tugas</th>
                                        <th class="bg-theme">Keterangan Tugas</th>
                                        <th class="bg-theme">Status Tugas</th>
                                        <th class="bg-theme">Nama Matakuliah</th>
                                        <th class="bg-theme">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dataTugas as $item)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $item->nama_tugas }}</td>
                                            <td>{{ $item->ket_tugas }}</td>
                                            <td>{{ $item->status_tugas }}</td>
                                            <td>{{ $item->kategori->nama_kategori }}</td>
                                            <td>
                                                <center><a href="{{ $item->id }}"><i
                                                            class="fa-solid fa-pen-to-square text-info"></i></a> | <a
                                                        href="{{ route('admin.destroy.tugas', $item->id) }}"><i
                                                            class="fa-solid fa-trash text-danger"></i></a>
                                                </center>
                                            </td>
                                        </tr>
                                        @php
                                            $no++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>

    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js') }}"></script> --}}
@endsection
