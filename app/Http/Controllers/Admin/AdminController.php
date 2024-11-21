<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        return view('dashboard.index');
    }

    public function pendaftaran(Request $request)
    {
        return view('dashboard.admin-role.pendaftaran');
    }

    public function celender(Request $request)
    {
        return view('dashboard.admin-role.celender');
    }

}
