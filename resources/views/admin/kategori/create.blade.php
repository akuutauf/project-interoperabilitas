{{-- extend layout from master --}}
@extends('admin.layout.master')

@section('title')
    <title>Tambah Kategori | Interoperabilitas</title>
@endsection

{{-- Include Section for Content --}}
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tambah Data Kategori</h1>
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
                            <strong class="card-title">Form Insert Data Kategori</strong>
                        </div>
                        <div class="card-body">
                            {{-- Start Container Form --}}
                            <section>
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        {{-- Form action disesuaikan --}}
                                        <form action="/admin/manajemen-dosen/" class="form-group" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="container container-form shadow-card mb-5">
                                                <div class="row ml-4 mr-4 pt-5">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nama_kategori" class="medium">Nama Kategori
                                                                :</label>
                                                            <input type="text" class="form-control form-theme"
                                                                id="nama_kategori" name="nama_kategori"
                                                                placeholder="Nama kategori">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="gender_dosen" class="medium">Status Kategori
                                                                    :</label>
                                                                <select class="form-control form-theme" id="gender_dosen"
                                                                    name="gender_dosen">
                                                                    <option value="Default">Pilih Status</option>
                                                                    <option value="Aktif">Aktif</option>
                                                                    <option value="Nonaktif">Nonaktif</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ml-4 mr-4 pb-5">
                                                    <div class="justify-content-between">
                                                        <a href="/kategori" name="kembali"
                                                            class="btn bg-secondary px-sm-3 py-sm-2 text-white mt-3 border-radius"
                                                            id="back">
                                                            Kembali</a>
                                                        <button type="submit"
                                                            class="btn button px-sm-3 py-sm-2 fw-semi-bold mt-3 border-radius">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            {{-- End Container Form --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->

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
