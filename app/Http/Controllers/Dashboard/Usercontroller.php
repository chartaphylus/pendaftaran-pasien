<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function pendaftaran(Request $request)
    {
        return view('dashboard.usser-role.pendaftaran');
    }
    
    public function celender(Request $request)
    {
        return view('dashboard.usser-role.celender');
    }
}
