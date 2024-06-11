<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-2xl font-semibold mb-4 text-center">Business Campaigns</h2>
        <!-- Button to trigger the campaign creation form -->
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="showCreateForm">
            Create Campaign
        </button>

        <!-- Livewire component for creating campaigns -->
        @if($showCreateForm)
            @livewire('create-campaign')
        @endif
        @livewire('business-campaign-list')
    </div>
</x-app-layout>
