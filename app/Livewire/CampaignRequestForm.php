<?php

namespace App\Livewire;

use App\Models\CampaignRequest;
use Livewire\Component;
use Livewire\WithFileUploads;

class CampaignRequestForm extends Component
{
    use WithFileUploads;

    public $campaign;
    public $portfolio;
    public $pdf;

    protected $rules = [
        'portfolio' => 'required|string|max:1000',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Limit to 2MB
    ];

    public function submit()
    {
        $this->validate();

        $pdfPath = $this->pdf->store('campaign-requests', 'public');

        CampaignRequest::create([
            'campaign_id' => $this->campaign->id,
            'user_id' => auth()->id(),
            'portfolio' => $this->portfolio,
            'pdf_path' => $pdfPath,
        ]);

        session()->flash('message', 'Campaign request submitted successfully.');

        return redirect()->route('campaign.details', $this->campaign);
    }
    public function render()
    {
        return view('livewire.campaign-request-form');
    }
}
