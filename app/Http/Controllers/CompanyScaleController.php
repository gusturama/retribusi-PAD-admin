<?php

namespace App\Http\Controllers;

use App\Models\CompanyScale;
use Illuminate\Http\Request;

class CompanyScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Jenis Usaha";
        $company_scales = CompanyScale::all();
        return view('skala-usaha.skala-usaha', compact('company_scales', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Skala Usaha';
        return view('skala-usaha.skala-usaha-tambah', compact('title'));
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
            'nama_skala_usaha' => 'required'
        ]);

        CompanyScale::create([
            'scale' => $request->nama_skala_usaha
        ]);

        return redirect()->route('skala-usaha-index')
            ->with('success', 'Data Skala Usaha berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyScale  $companyScale
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyScale $companyScale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyScale  $companyScale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Skala Usaha';
        $company_scale = CompanyScale::find($id);
        return view('skala-usaha.skala-usaha-edit', compact('company_scale', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyScale  $companyScale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_skala_usaha' => 'required'
        ]);

        CompanyScale::find($id)->update([
            'scale' => $request->nama_skala_usaha
        ]);

        return redirect()->route('skala-usaha-index')
            ->with('success', 'Data Skala Usaha berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyScale  $companyScale
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyScale $companyScale)
    {
        //
    }
}
