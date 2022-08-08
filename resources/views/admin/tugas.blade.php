{{-- extend layout from master --}}
@extends('admin.layout.master')

@section('title')
    <title>Interoperabilitas | Tugas</title>
@endsection

{{-- Include Section for Content --}}
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

    {{-- Content For Viewing Data Kategori --}}
    <section class="mt-3">
        <center>
            <h3>Konten Data Kategori</h3>
        </center>
    </section>
@endsection
