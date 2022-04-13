<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Pemilik Usaha';
        $owners = User::where('role', 'owner')->get();
        return view('pemilik-usaha.pemilik-usaha', compact('owners', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Pemilik Usaha';
        return view('pemilik-usaha.pemilik-usaha-tambah', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp'=> 'required',
            'password'=> 'required',
            'foto' => 'image|file|max:2048'
        ]);

        $foto = '';

        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('user-photos');
        }

        $password = Hash::make($request->newPassword);

        $user = User::create([
            "name" => $request->nama,
            "email" => $request->email,
            "phone" => $request->no_hp,
            "password" => $password,
            "photo" => $foto,
            "role" => "owner"
        ]);

        return redirect()->route('pemilik-usaha-index')->with('success', 'Data Pemilik Usaha berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail Pemilik Usaha';
        $user = User::find($id);
        return view('pemilik-usaha.pemilik-usaha-detail', compact('user', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Pemilik Usaha';
        $user = User::find($id);
        return view('pemilik-usaha.pemilik-usaha-edit', compact('title', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp'=> 'required',
            'foto' => 'image|file|max:2048'
        ]);

        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('user-photos');
        }else {
            $pengguna = User::find($id);
            $foto = $pengguna->photo;
        }

        $password = Hash::make($request->newPassword);

        $user = User::where('id', $id)->update([
            "name" => $request->nama,
            "email" => $request->email,
            "phone" => $request->no_hp,
            "photo" => $foto,
            "role" => "owner"
        ]);

        return redirect()->route('pemilik-usaha-index')->with('success', 'Data Petugas berhasil dimodifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('pemilik-usaha-index')
            ->with('success', 'Pemilik Usha Berhasil Dihapus');
    }
}
