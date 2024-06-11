<?php

namespace App\Livewire;

use App\Models\Campaign;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CampaignList extends Component
{

    use WithPagination;
    #[Url()]
    public $search = '';


    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    #[Computed()]
    public function campaigns()
    {
//        return Campaign::all();
        return Campaign::paginate(2);

    }

    public function render()
    {
        return view('livewire.campaign-list');
    }

}
