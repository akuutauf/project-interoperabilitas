{{-- extend layout from master --}}
@extends('admin.layout.master')

@section('title')
    <title>Interoperabilitas | Insert Kategori</title>
@endsection

{{-- Include Section for Content --}}
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Insert Kategori</h1>
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
                            <strong class="card-title">Form Data Kategori</strong>
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
                                                {{-- <div class="row ml-4 mr-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nip_nik_dosen" class="medium">NIP atau NIK Dosen
                                                                :</label>
                                                            <input type="text" class="form-control form-theme"
                                                                id="nip_nik_dosen" name="nip_nik_dosen"
                                                                placeholder="NIP atau NIK">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nidn_dosen" class="medium">NIDN Dosen :</label>
                                                            <input type="text" class="form-control form-theme"
                                                                id="nidn_dosen" name="nidn_dosen" placeholder="NIDN">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ml-4 mr-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="foto_dosen" class="medium">Foto Dosen <span
                                                                    class="fw-medium">(*max img
                                                                    2Mb)</span>:</label>
                                                            <input type="file" class="form-control form-theme"
                                                                id="foto_dosen" name="foto_dosen" placeholder="Foto Dosen">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="jabatan_dosen" class="medium">Jabatan Dosen
                                                                :</label>
                                                            <input type="text" class="form-control form-theme"
                                                                id="jabatan_dosen" name="jabatan_dosen"
                                                                placeholder="Jabatan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ml-4 mr-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email_dosen" class="medium">Email Dosen :</label>
                                                            <input type="text" class="form-control form-theme"
                                                                id="email_dosen" name="email_dosen"
                                                                placeholder="Alamat email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="notelp_dosen" class="medium">Nomor Telepon :</label>
                                                            <input type="text" class="form-control form-theme"
                                                                id="notelp_dosen" name="notelp_dosen"
                                                                placeholder="Nomor telepon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ml-4 mr-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="alamat_dosen" class="medium">Alamat Dosen
                                                                :</label>
                                                            <textarea class="form-control form-color " id="alamat_dosen" name="alamat_dosen" placeholder="Alamat lengkap"
                                                                rows="3"></textarea>
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
                                                </div> --}}
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
    {{-- <script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js') }}"></script> --}}
@endsection
