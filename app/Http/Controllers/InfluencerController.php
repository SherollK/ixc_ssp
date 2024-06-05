<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfluencerController extends Controller
{

    public function showDashboard()
    {
        return view('Influencer.influencerDashboard');
    }
    public function showCampaign()
    {
        return view('Influencer.influencerCampaign');
    }
}
