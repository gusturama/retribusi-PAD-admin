<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Company;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $petugas = Staff::all()->count();
        $pemilik = User::where('role', 'owner')->get()->count();
        $usaha = Company::all()->count();
        return view('dashboard', compact('petugas', 'pemilik', 'usaha', 'title'));
    }
}
