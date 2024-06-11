<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
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
    public function showCampaignDetails(Campaign $campaign)
    {
        // Eager load the campaign requests for the campaign
        $campaign->load('requests.user');

        return view('Business.campaignDetails', compact('campaign'));
    }



}
