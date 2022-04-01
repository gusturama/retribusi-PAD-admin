<?php

namespace App\Http\Controllers;

use App\Models\CompanyType;
use Illuminate\Http\Request;

class CompanyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Jenis Usaha";
        $company_types = CompanyType::all();
        return view('jenis-usaha.jenis-usaha', compact('company_types', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Jenis Usaha';
        return view('jenis-usaha.jenis-usaha-tambah', compact('title'));
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
            'nama_jenis_usaha' => 'required'
        ]);

        CompanyType::create([
            'type' => $request->nama_jenis_usaha
        ]);

        return redirect()->route('jenis-usaha-index')
            ->with('success', 'Data Jenis Usaha berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyType $companyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Jenis Usaha';
        $company_type = CompanyType::find($id);
        return view('jenis-usaha.jenis-usaha-edit', compact('company_type', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_jenis_usaha' => 'required'
        ]);

        CompanyType::find($id)->update([
            'type' => $request->nama_jenis_usaha
        ]);

        return redirect()->route('jenis-usaha-index')
            ->with('success', 'Data Jenis Usaha berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyType $companyType)
    {
        //
    }
}
