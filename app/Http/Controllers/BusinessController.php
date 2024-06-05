<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BusinessController extends Controller
{


    public function showDashboard()
    {
        return view('Business.businessDashboard');
    }
    public function showCampaign()
    {
        return view('Business.businessCampaign');
    }


}
