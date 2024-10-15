@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">Manage Level</div>
                    <div class="card-body">
                        <a href="{{ route('user.create') }}" class="btn btn-success btn-block btn-sm"
                            style="width:100px!important;margin-left: 1000px!important;padding:5px;font-sixe:15px;margin-bottom: 10px">
                            Tambah
                        </a>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th width="20px" class="text-center">ID</th>
                                <th width="150px" class="text-center">Level ID</th>
                                <th width="200px" class="text-center">Username</th>
                                <th width="200px" class="text-center">Nama</th>
                                <th width="150px" class="text-center">Password</th>
                            </tr>
                            @foreach ($useri as $m_user)
                                <tr>
                                    <td>{{ $m_user->user_id }} </td>
                                    <td>{{ $m_user->level_id }}</td>
                                    <td>{{ $m_user->username }}</td>
                                    <td>{{ $m_user->nama }}</td>
                                    <td>{{ $m_user->password }}</td>
                                    <td width="800px" class="text-center">
                                        <form action="{{ route('user.destroy', $m_user->user_id) }}" method="POST">
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route('user.show', $m_user->user_id) }}">Show</a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('user.edit', $m_user->user_id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {{-- @endsection --}}

    @push('scripts')
    @endpush
