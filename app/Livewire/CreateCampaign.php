<?php

namespace App\Livewire;

use Livewire\Component;

class CreateCampaign extends Component
{
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        // Add validation rules for other fields here
    ];

    public function createCampaign()
    {
        $this->validate();

        Campaign::create([
            'title' => $this->title,
            'description' => $this->description,
            // Assign other form fields here
            'business_user_id' => Auth::id(),
        ]);

        $this->reset();
        session()->flash('message', 'Campaign created successfully!');
    }
    public $showCreateForm = false;

    public function showCreateForm()
    {
        $this->showCreateForm = true;
    }

    public function render()
    {
        return view('livewire.create-campaign');
    }
}
