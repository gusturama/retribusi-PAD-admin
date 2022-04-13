<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Banjar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Petugas';
        $staffs = Staff::all();
        return view('petugas.petugas', compact('staffs', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Petugas';
        $banjars = Banjar::all();
        return view('petugas.petugas-tambah', compact('title', 'banjars'));
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
            'banjar' => 'required',
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
            "role" => "staff"
        ]);

        $user->staff()->create([
            "banjar_id" => $request->banjar
        ]);

        return redirect()->route('petugas-index')->with('success', 'Data Petugas berhasil ditambahkan');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail Petugas';
        $user = User::find($id);
        return view('petugas.petugas-detail', compact('user', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Petugas';
        $banjars = Banjar::all();
        $user = User::find($id);
        return view('petugas.petugas-edit', compact('title', 'banjars', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp'=> 'required',
            'banjar' => 'required',
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
            "role" => "staff"
        ]);

        Staff::where('user_id', $id)->update([
            "banjar_id" => $request->banjar
        ]);

        return redirect()->route('petugas-index')->with('success', 'Data Petugas berhasil dimodifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Staff::where('user_id', $id)->delete();
        User::find($id)->delete();
        return redirect()->route('petugas-index')
            ->with('success', 'Petugas Berhasil Dihapus');
    }
}
