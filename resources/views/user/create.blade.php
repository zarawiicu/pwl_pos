@extends('layouts.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Membuat Daftar User</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('user.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('user.store') }}">
        @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan username">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="nama">Nama:</slabel>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan Password">
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12"">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <!-- /.content -->
@endsection
