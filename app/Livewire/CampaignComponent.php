<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campaign;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CampaignComponent extends Component
{
    public $campaigns, $categories, $title, $slug, $description, $content, $selectedCategories = [], $start_date_time, $end_date_time, $campaign_id;
    public $isOpen = 0;

    public function render()
    {
        $this->campaigns = Campaign::where('business_user_id', Auth::id())->get();
        $this->categories = Category::all();
        return view('livewire.BusinessCampaign.campaign-component');
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
        $this->campaign_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:campaigns,slug,' . $this->campaign_id,
            'description' => 'required',
            'content' => 'required',
            'start_date_time' => 'required|date',
            'end_date_time' => 'required|date|after_or_equal:start_date_time',
            'selectedCategories' => 'required|array|min:1',
        ]);

        $campaign = Campaign::updateOrCreate(['id' => $this->campaign_id], [
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'content' => $this->content,
            'business_user_id' => Auth::id(),
            'start_date_time' => $this->start_date_time,
            'end_date_time' => $this->end_date_time,
        ]);

        $campaign->categories()->sync($this->selectedCategories);

        session()->flash('message', $this->campaign_id ? 'Campaign Updated Successfully.' : 'Campaign Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function view($id)
    {
        $campaign = Campaign::findOrFail($id);
        $this->campaign_id = $id;
        $this->title = $campaign->title;
        $this->slug = $campaign->slug;
        $this->description = $campaign->description;
        $this->content = $campaign->content;
        $this->start_date_time = $campaign->start_date_time;
        $this->end_date_time = $campaign->end_date_time;

        $this->isOpen = true;
    }

    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        $this->campaign_id = $id;
        $this->title = $campaign->title;
        $this->slug = $campaign->slug;
        $this->description = $campaign->description;
        $this->content = $campaign->content;
        $this->selectedCategories = $campaign->categories->pluck('id')->toArray();
        $this->start_date_time = $campaign->start_date_time;
        $this->end_date_time = $campaign->end_date_time;

        $this->openModal();
    }

    public function delete($id)
    {
        Campaign::find($id)->delete();
        session()->flash('message', 'Campaign Deleted Successfully.');
    }
}
