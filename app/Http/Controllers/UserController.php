<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = UserModel::with('level')->get();
         return view('user.index', ['data' => $user]);
    }

    public function tambah() {
        return view('user.create');
    }

    public function tambah_simpan(StoreUserRequest $request):RedirectResponse {
        $validated = $request->validate();
        $validated = $request->safe()->only(['username', 'nama', 'password', 'level_id']);
        $validated = $request->safe()->except(['username', 'nama', 'password', 'level_id']);
        
        return redirect('/user');
    }

    public function ubah($id) {
        $user = UserModel::find($id);
        return view('user.edit', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request) {
        $user = UserModel::find($id);

        $user->username = $request-> username;
        $user->nama = $request-> nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request-> level_id;

        $user->save();

        return redirect('/user');
    }
    
    public function hapus($id) {
        $user = UserModel::find($id);
        $user-> delete();

        return redirect('/user');
    }
}