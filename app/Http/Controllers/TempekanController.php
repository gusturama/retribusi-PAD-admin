<?php

namespace App\Http\Controllers;

use App\Models\Banjar;
use App\Models\Tempekan;
use Illuminate\Http\Request;

class TempekanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $title = 'Tambah Data Tempekan';
        $banjar = Banjar::find($id);
        return view('tempekan.tempekan-tambah', compact('title', 'banjar'));
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
        $request->validate([
            'nama_tempekan' => 'required',
            'banjar_id'=> 'required'
        ]);
        $id = $request->banjar_id;
        Tempekan::create([
            'name' => $request->nama_tempekan,
            'banjar_id' => $id,
        ]);
        $id = $request->banjar_id;
        // $url = 'banjar-detail/'.$request->banjar_id;
        return redirect()->route('banjar-detail', ['id' => $id])
            ->with('success', 'Data Tempekan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tempekan  $tempekan
     * @return \Illuminate\Http\Response
     */
    public function show(Tempekan $tempekan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tempekan  $tempekan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title='Edit Tempekan';
        $tempekan = Tempekan::find($id);
        return view('tempekan.tempekan-edit', compact('title', 'tempekan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tempekan  $tempekan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_tempekan' => 'required',
        ]);

        Tempekan::find($id)->update([
            'name' => $request->nama_tempekan,
        ]);

        $tempekan=Tempekan::find($id);
        $url_kembali = 'banjar-detail/'.$tempekan->banjar_id;

        return redirect($url_kembali)
            ->with('success', 'Data Temepekan berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tempekan  $tempekan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tempekan=Tempekan::find($id);
        $url_kembali = 'banjar-detail/'.$tempekan->banjar_id;
        Tempekan::find($id)->delete();


        return redirect($url_kembali)
            ->with('success', 'Data Temepekan berhasil dihapus');
    }
}
