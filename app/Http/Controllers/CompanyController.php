<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Banjar;
use App\Models\Company;
use App\Models\CompanyType;
use App\Models\CompanyScale;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\SubscriptionType;
use App\Models\CompaniesUnpaidTransaction;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Usaha';
        $companies = Company::all();
        return view('usaha.usaha', compact('companies', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Usaha';
        $banjars = Banjar::all();
        $company_types = CompanyType::all();
        $subscription_types = SubscriptionType::all();
        $company_scales = CompanyScale::all();
        $owners = User::where('role', 'owner')->get();
        return view('usaha.usaha-tambah', compact('title', 'banjars', 'owners', 'company_types', 'subscription_types', 'company_scales'));
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
            'nama_usaha' => 'required',
            'pemilik' => 'required',
            'jenis_usaha'=> 'required',
            'banjar'=> 'required',
            'alamat'=> 'required',
            'dokumen' => 'image|file|max:2048',
            'foto' => 'image|file|max:2048',
            'lat'=> 'required',
            'lng'=> 'required',
            'kategori'=> 'required',
        ]);

        $subs = Subscription::where('subscription_type_id', $request->kategori)->where('company_type_id', $request->kategori)->first();
        
        // echo($subs->id);
        // dd($request);
        $foto = '';
        $dokumen = '';


        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('company-photos');
        }

        if ($request->file('dokumen')) {
            $dokumen = $request->file('dokumen')->store('company-documents');
        }


        $company = Company::create([
            "user_id" => $request->pemilik,
            "banjar_id" => $request->banjar,
            "company_type_id" => $request->jenis_usaha,
            "name" => $request->nama_usaha,
            "address" => $request->alamat,
            "photos" => $foto,
            "documents" => $dokumen,
            "status" => "wait_verified",
            "latitude" => $request->lat,
            "longitude" => $request->lng,
            "subscription_id" => $subs->id
        ]);

        return redirect()->route('usaha-index')->with('success', 'Data Usaha berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // kode asli
        $title = 'Detail Usaha';
        // $company = Company::find($id);
        // return view('usaha.usaha-detail', compact('company', 'title'));

        // tes panggil company scale dari company
        $company = Company::find($id);
        // dd($company->subscription->company_scale);
        return view('usaha.usaha-detail', compact('company', 'title'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Usaha";
        $company = Company::find($id);
        $banjars = Banjar::all();
        $company_types = CompanyType::all();
        $subscription_types = SubscriptionType::all();
        $company_scales = CompanyScale::all();
        $owners = User::where('role', 'owner')->get();
        return view('usaha.usaha-edit', compact('company', 'title','banjars', 'owners', 'company_types', 'subscription_types', 'company_scales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //melakukan validasi data
       $validated = $request->validate([
        'nama_usaha' => 'required',
        'pemilik' => 'required',
        'jenis_usaha'=> 'required',
        'banjar'=> 'required',
        'alamat'=> 'required',
        'dokumen' => 'image|file|max:2048',
        'foto' => 'image|file|max:2048',
        'lat'=> 'required',
        'lng'=> 'required',
        'status'=>'required',
        'kategori'=> 'required',
        ]);

        $comp = Company::find($id);
        $subs = Subscription::where('subscription_type_id', $request->kategori)->where('company_type_id', $request->jenis_usaha)->first();
        
        // echo($subs->id);
        // dd($request);
        $foto = '';
        $dokumen = '';


        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('company-photos');
        }else{
            $foto = $comp->photos;
        }

        if ($request->file('dokumen')) {
            $dokumen = $request->file('dokumen')->store('company-documents');
        }else{
            $dokumen = $comp->documents;
        }

        // auto insert data ke tabel unpaid ketika status company/usaha dirubah menjadi "verified"
        if ($comp->status != "verified" && $request->status == "verified") {
            // insert ke unpaid
            $unpaid = CompaniesUnpaidTransaction::create([
                "company_id" => $comp->id,
                "subscription_type_id" => $comp->subscription->subscription_type->id,
                "amount" => $comp->subscription->subscription_amount,
                "unpaid_at" => Carbon::now(),
            ]);
            // update kolom verified_at di tabel companies
            $company = Company::where('id', $id)->update([
                "verified_at" => Carbon::now()->setTimeZone('Asia/Makassar'),
            ]);
        }

        $company = Company::where('id', $id)->update([
            "user_id" => $request->pemilik,
            "banjar_id" => $request->banjar,
            "company_type_id" => $request->jenis_usaha,
            "name" => $request->nama_usaha,
            "address" => $request->alamat,
            "photos" => $foto,
            "documents" => $dokumen,
            "status" => $request->status,
            "latitude" => $request->lat,
            "longitude" => $request->lng,
            "subscription_id" => $subs->id
        ]);

        return redirect()->route('usaha-index')->with('success', 'Data Usaha berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::find($id)->delete();
        return redirect()->route('usaha-index')
            ->with('success', 'Pemilik Usha Berhasil Dihapus');
    }

    public function trash()
    {
        $title = "Usaha Terhapus";
        $comps = Company::onlyTrashed()->get();
        return view('usaha.usaha-sampah', compact('comps', 'title'));
    }

    public function restore($id)
    {
        $comp = Company::onlyTrashed()->where('id', $id);
        $comp->restore();
        return redirect()->route('pemilik-usaha-sampah');
    }

    public function restore_all()
    {
        $user = User::onlyTrashed()->where('role', 'owner');
        $user->restore();
        return redirect()->route('pemilik-usaha-sampah');

    }

    public function force_delete($id)
    {
        $user = User::onlyTrashed()->where('id', $id);
        $user->forceDelete();
        return redirect()->route('pemilik-usaha-sampah');
    }

    public function force_delete_all()
    {
        $user = User::onlyTrashed()->where('role', 'owner');
        $user->forceDelete();
        return redirect()->route('pemilik-usaha-sampah');

    }
}
