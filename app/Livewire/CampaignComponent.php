<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Campaign;

class CampaignComponent extends Component
{
    public $campaigns, $title, $description, $campaign_id;
    public $isOpen = 0;

    public function render()
    {
        $this->campaigns = Campaign::all();
        return view('livewire.campaign-component');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->campaign_id = '';
    }

    public function store()
    {
        Campaign::updateOrCreate(['id' => $this->campaign_id], [
            'title' => $this->title,
            'description' => $this->description
        ]);

        session()->flash('message',
            $this->campaign_id ? 'Campaign Updated Successfully.' : 'Campaign Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        $this->campaign_id = $id;
        $this->title = $campaign->title;
        $this->description = $campaign->description;

        $this->openModal();
    }

    public function delete($id)
    {
        Campaign::find($id)->delete();
        session()->flash('message', 'Campaign Deleted Successfully.');
    }
}
