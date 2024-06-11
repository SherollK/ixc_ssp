<div class="max-w-4xl mx-auto relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Title</th>
            <th scope="col" class="px-6 py-3">Description</th>
            <th scope="col" class="px-6 py-3">Start Date</th>
            <th scope="col" class="px-6 py-3">End Date</th>
            <th scope="col" class="px-6 py-3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($campaigns as $campaign)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $campaign->title }}
                </th>
                <td class="px-6 py-4">{{ $campaign->description }}</td>
                <td class="px-6 py-4">{{ $campaign->start_date_time }}</td>
                <td class="px-6 py-4">{{ $campaign->end_date_time }}</td>
                <td class="px-6 py-4">
                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" wire:click="viewCampaignDetails({{ $campaign->id }})">
                        View
                    </button>
                    <button class="font-medium text-red-600 dark:text-red-500 hover:underline" wire:click="deleteCampaign({{ $campaign->id }})">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
