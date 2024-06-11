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
    public function render()
    {
        return view('livewire.business-campaign-list');
    }
}
