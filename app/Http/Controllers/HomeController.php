<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if($role == 'influencer') {
            return view('Campaign.index');
        } if ($role =='business') {
            return view('Business.businessDashboard');
        } else {
            return view('admin');
        }
    }
}
