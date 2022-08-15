{{-- extend layout from master --}}
@extends('admin.layout.master')

@section('title')
    <title>Interoperabilitas | Kategori</title>
@endsection

{{-- Include Section for Content --}}
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Kategori</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Data Kategori</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="bg-theme">No</th>
                                        <th class="bg-theme">Nama kategori</th>
                                        <th class="bg-theme">Status Kategori</th>
                                        <th class="bg-theme">Terakhir Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Analisis Desain Perangkat Lunak</td>
                                        <td>Aktif</td>
                                        <td>2022-08-15 08:00:00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Manajemen Proyek</td>
                                        <td>Aktif</td>
                                        <td>2022-08-15 08:00:00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Interoperabilitas</td>
                                        <td>Aktif</td>
                                        <td>2022-08-15 08:00:00</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Metode dan Model Pengembangan Perangkat Lunak</td>
                                        <td>Aktif</td>
                                        <td>2022-08-15 08:00:00</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Keamanan Perangkat Lunak</td>
                                        <td>Aktif</td>
                                        <td>2022-08-15 08:00:00</td>
                                    </tr>
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
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

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
    <script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
@endsection
