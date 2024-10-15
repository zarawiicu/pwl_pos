@extends('layouts.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD User</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('user.create') }}" class="btn btn-success">
                    Tambah
                </a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">ID</th>
            {{-- <th width="150px" class="text-center">Level ID</th> --}}
            <th width="200px" class="text-center">Username</th>
            <th width="200px" class="text-center">Nama</th>
            <th width="150px" class="text-center">Password</th>
        </tr>
        @foreach ($useri as $m_user)
            <tr>
                <td>{{ $m_user->user_id }} </td>
                {{-- <td>{{ $m_user->level_id }}</td> --}}
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ $m_user->password }}</td>
                <td width="500px" class="text-center">
                    <form action="{{ route('user.destroy', $m_user->user_id) }}" method="POST">
                        <a class="btn btn-sm btn-info" href="{{ route('user.show', $m_user->user_id) }}">Show</a>
                        <a class="btn btn-sm btn-primary" href="{{ route('user.edit', $m_user->user_id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@push('scripts')
@endpush
