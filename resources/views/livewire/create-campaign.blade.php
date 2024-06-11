<div>
    <form wire:submit.prevent="createCampaign">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" wire:model.defer="title">
            @error('title') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" wire:model.defer="description"></textarea>
            @error('description') <span>{{ $message }}</span> @enderror
        </div>

        <!-- Add other form fields here -->

        <button type="submit">Create Campaign</button>
    </form>
</div>
