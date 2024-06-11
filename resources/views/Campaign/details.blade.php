<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white shadow-lg overflow-hidden sm:rounded-lg p-8 my-6">
        <div class="flex justify-between items-center px-6 sm:px-0">
            <div>
                <h3 class="text-base font-semibold leading-7 text-gray-900">{{$campaign->title}}</h3>
                <div class="article-meta flex items-center">
                    <img class="w-7 h-7 rounded-full mr-3" src="{{$campaign->author->profile_photo_url}}" alt="{{$campaign->author->name}}">
                    <div>
                        <span class="text-xs font-medium text-gray-600">{{ $campaign->author->name }}</span>
                    </div>
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Apply
            </button>
        </div>

        <p class="mt-6 max-w-2xl text-sm leading-6 text-gray-500">Campaign details</p>

        <div class="mt-4 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-6 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Start date</dt>
                    <dd class="mt-2 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$campaign->start_date_time}}</dd>
                    <dt class="text-sm font-medium leading-6 text-gray-900">End date</dt>
                    <dd class="mt-2 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$campaign->end_date_time}}</dd>
                </div>
                <div class="px-6 py-8 sm:grid sm:grid-cols-3 sm:gap-6 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Description</dt>
                    <dd class="mt-2 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$campaign->description}}</dd>
                </div>
                <div class="px-6 py-8 sm:grid sm:grid-cols-3 sm:gap-6 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                    <dd class="mt-2 text-sm leading-6 text-gray-700 sm:col-span-3 lg:col-span-2 lg:col-start-2 lg:mt-0">{{$campaign->content}}</dd>
                </div>
            </dl>
        </div>
    </div>
</x-app-layout>
