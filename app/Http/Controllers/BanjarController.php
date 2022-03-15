<?php

namespace App\Http\Controllers;

use App\Models\Banjar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BanjarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Data Banjar';
        $banjars = Banjar::all();
        return view('banjar.banjar', compact('banjars', 'title'));
        // $banjars = Banjar::latest()->paginate(5);
        // return view('banjar.banjar', compact('banjars', 'title'))->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Banjar';
        return view('banjar.banjar-tambah', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //melakukan validasi data
        $request->validate([
            'nama_banjar' => 'required',
            'alamat' => 'required',
        ]);

        Banjar::create([
            'name' => $request->nama_banjar,
            'address' => $request->alamat,
        ]);

        return redirect()->route('banjar-index')
            ->with('success', 'Data Banjar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'Detail Banjar';
        $banjar = Banjar::find($id);
        return view('banjar.banjar-detail', compact('banjar', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = 'Edit Banjar';
        $banjar = Banjar::find($id);
        return view('banjar.banjar-edit', compact('banjar', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_banjar' => 'required',
            'alamat' => 'required',
        ]);

        Banjar::find($id)->update([
            'name' => $request->nama_banjar,
            'address' => $request->alamat,
        ]);

        return redirect()->route('banjar-index')
            ->with('success', 'Data Banjar berhasil dirubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banjar::find($id)->delete();
        return redirect()->route('banjar-index')
            ->with('success', 'Banjar Berhasil Dihapus');
    }
}
