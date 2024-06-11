@props(['campaign'])
<div class="py-2">
    <article class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-4 py-4">
            <div class="article-body grid grid-cols-12 gap-3 items-center">
                <div class="col-span-11">
                    <div class="article-meta flex items-center">
                        <img class="w-7 h-7 rounded-full mr-3" src="{{$campaign->author->profile_photo_url}}" alt="{{$campaign->author->name}}">
                        <div>
                            <h3 class="text-lg font-semibold leading-7 text-gray-600">
                                <a href="{{route('campaign.details', $campaign->slug)}}" class="hover:underline">{{$campaign->title}}</a>
                            </h3>
                            <span class="text-xs font-medium text-gray-600">{{ $campaign->author->name }}</span>
                        </div>
                    </div>
                    <p class="mt-2 text-base text-gray-600">{{$campaign->description}}</p>
                </div>
                <div class="col-span-1 flex items-center justify-center h-full">
                    <a href="{{route('campaign.details', $campaign->slug)}}" class="text-gray-400 hover:text-gray-600 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </article>
</div>
