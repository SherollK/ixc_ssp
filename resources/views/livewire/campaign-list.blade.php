<div class="px-3 lg:px-7 py-6">
    <div class="border-b border-gray-200 flex-grow">
        <div class="text-gray-600">
            @if ($search)
                Searching {{ $search }}
            @endif
        </div>
    </div>
    <div class="py-2 px-2 ">
        @foreach($this->campaigns as $campaign)
            <x-campaign.campaign-card :campaign="$campaign"/>
        @endforeach
    </div>
    <div class="my-3">
        {{ $this->campaigns->links() }}
    </div>
</div>
