@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h5 class="card-title">Buat Kategori Baru</h5>
            </div>

            <form method="post" action="{{ route('kategori.store')}}">
                @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" placeholder="Isi kodemu...">
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="Kategori_nama" name="kategori_nama" placeholder="Isi namamu...">
                </div>
            </div>

            <div class="card-footeer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
@endsection
