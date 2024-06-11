<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function showCampaign()
    {
        return view('Campaign.index',
        [
            'campaigns' => Campaign::all()
        ]);
    }

    public function campaignDetails(Campaign $campaign)
    {
        return view('Campaign.details',
        [
            'campaign' => $campaign
        ]);
    }
}
