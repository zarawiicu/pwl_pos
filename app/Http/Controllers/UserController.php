<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\LevelModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $useri = UserModel::all(); // Mengambil semua isi tabel
        $levels = LevelModel::all();
        return view('user.index', compact('useri','levels'))->with('i');
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create()
    {
        $levels = LevelModel::all();
        return view('user.create', compact('levels'));
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'user_id' => 'max 20',
            'username' => 'required',
            'nama' => 'required',
            'level_id' => 'required|exists:levels,id',
        ]);

        //fungsi eloquent untuk menambah data
        UserModel::create($request->all());
        return redirect()->route('user.index')->with('success', 'user Berhasil Ditambahkan');
    }

    /**
    * Display the specified resource.
    */

    public function show(string $id, UserModel $useri)
    {
        $useri = UserModel::findOrFail($id);
        $levels = LevelModel::all();
        return view('user.show', compact('useri','levels'));
    }
    /**
    * Show the form for editing the specified resource.
    */

    public function edit(string $id)
    {
        $useri = UserModel::find($id);
        $levels = LevelModel::all();
        return view('user.edit', compact('useri','levels'));
    }

    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'level_id' => 'required'
            
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        UserModel::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diupdate');
    }
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        $useri= UserModel::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('success', 'data Berhasil Dihapus');
    }
}