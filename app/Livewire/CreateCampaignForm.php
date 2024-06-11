<?php

namespace App\Livewire;

use App\Models\Campaign;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateCampaignForm extends Component
{


    public $title;
    public $slug;
    public $description;
    public $content;
    public $selectedCategories = [];
    public $start_date_time;
    public $end_date_time;
    public $isOpen = false;
    public $categories;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.create-campaign-form');
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

    private function resetInputFields()
    {
        $this->title = '';
        $this->slug = '';
        $this->description = '';
        $this->content = '';
        $this->selectedCategories = [];
        $this->start_date_time = '';
        $this->end_date_time = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:campaigns,slug',
            'description' => 'required',
            'content' => 'required',
            'start_date_time' => 'required|date',
            'end_date_time' => 'required|date|after_or_equal:start_date_time',
            'selectedCategories' => 'required|array|min:1',
        ]);

        $campaign = Campaign::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'content' => $this->content,
            'business_user_id' => Auth::id(),
            'start_date_time' => $this->start_date_time,
            'end_date_time' => $this->end_date_time,
        ]);

        $campaign->categories()->sync($this->selectedCategories);

        session()->flash('message', 'Campaign Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
}
