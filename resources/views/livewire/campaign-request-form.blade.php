<div class="mt-8 border-t border-gray-100">
    <h3 class="text-base font-semibold leading-7 text-gray-900">Apply for {{ $campaign->title }}</h3>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="portfolio" class="mt-2 max-w-2xl text-sm leading-6 text-gray-500">Your Message</label>
            <textarea wire:model="portfolio" id="portfolio" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"></textarea>
            @error('portfolio') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="pdf" class="mt-2 max-w-2xl text-sm leading-6 text-gray-500">Upload PDF</label>
            <input type="file" wire:model="pdf" id="pdf" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
            @error('pdf') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            <div wire:loading wire:target="pdf">Uploading...</div>
        </div>

        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Submit Request
        </button>
    </form>
</div>
