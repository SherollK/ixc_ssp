<div x-data="{ query: '' }" id="search-box">
    <div class="pl-4">
        <h3 class="text-lg font-semibold text-gray-900 mb-3">Search</h3>
        <form class="max-w-lg mx-auto">
            <div class="flex">
                <div class="relative w-full">
                    <input x-model="query" type="text" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Search Campaigns" required />
                    <button x-on:click="$dispatch('search', {search: query})" type="button" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
