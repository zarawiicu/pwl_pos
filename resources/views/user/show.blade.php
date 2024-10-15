@extends('layouts.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="floaat-left">
                <h2>Show User</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('user.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User ID</strong>
                {{ $useri->user_id }}
            </div>
            <div class="form-group">
                <strong>Level ID</strong>
                {{ $useri->level_id }}
            </div>
            <div class="form-group">
                <strong>Username</strong>
                {{ $useri->username }}
            </div>
            <div class="form-group">
                <strong>Nama</strong>
                {{ $useri->nama}}
            </div>
            <div class="form-group">
                <strong>Password</strong>
                {{ $useri->password }}
            </div>
        </div>
    </div>
@endsection