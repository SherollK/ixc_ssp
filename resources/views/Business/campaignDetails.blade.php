<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-2xl font-semibold mb-4 text-center">{{ $campaign->title }}</h2>

        <div class="mb-8 text-lg">
            <p class="mb-2">
                <span class="text-lg font-medium leading-6 text-gray-800">Start Date:</span>
                <span class="mt-2 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $campaign->start_date_time }}</span>
            </p>
            <p class="mb-2">
                <span class="text-lg font-medium leading-6 text-gray-800">End Date:</span>
                <span class="mt-2 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $campaign->end_date_time }}</span>
            </p>
            <p class="mb-2">
                <span class="text-lg font-medium leading-6 text-gray-800">Description:</span>
                <span class="mt-2 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $campaign->description }}</span>
            </p>
            <p class="mb-2">
                <span class="text-lg font-medium leading-6 text-gray-800">About:</span>
                <span class="mt-2 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $campaign->content }}</span>
            </p>
        </div>

        <div class="px-4 py-2">
            <h3 class="text-lg font-semibold mb-4 text-center">Campaign Requests</h3>
        </div>
        <div class="max-w-4xl mx-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 " >
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">User</th>
                    <th scope="col" class="px-6 py-3">Portfolio</th>
                    <th scope="col" class="px-6 py-3">PDF</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($campaign->requests as $request)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            <div class="flex items-center">
                                <img class="w-7 h-7 rounded-full mr-3" src="{{ $request->user->profile_photo_url }}" alt="{{ $request->user->name }}">
                                <p>{{ $request->user->name }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">{{ $request->portfolio }}</td>
                        <td class="px-6 py-4">
                            @if($request->pdf_path)
                                <a href="{{ asset('storage/' . $request->pdf_path) }}" target="_blank" class="text-blue-500 hover:underline">Download PDF</a>
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
