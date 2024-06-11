<?php

namespace App\Livewire;

use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BusinessCampaignList extends Component
{
    public $campaigns;

    public function mount()
    {
        // Fetch campaigns created by the authenticated user
        $this->campaigns = Campaign::where('business_user_id', Auth::id())->get();
    }

    public function viewCampaignDetails($campaignId)
    {
        // Redirect the user to the campaign details page
        return redirect()->route('business.campaigns.details', $campaignId);
    }

    public function render()
    {
        return view('livewire.business-campaign-list');
    }

    public function deleteCampaign($campaignId)
    {
        // Find the campaign by ID
        $campaign = Campaign::find($campaignId);

        // Delete the campaign
        $campaign->delete();

        // Fetch campaigns created by the authenticated user
        $this->campaigns = Campaign::where('business_user_id', Auth::id())->get();
        // Show a success message
        session()->flash('message', 'Campaign deleted successfully.');
        // Refresh the page
        return redirect()->route('business.dashboard');
    }
}
