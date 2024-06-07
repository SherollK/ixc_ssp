<!-- resources/views/livewire/BusinessCampaign/create.blade.php -->

<!-- resources/views/livewire/BusinessCampaign/create.blade.php -->

<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>


<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>

                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                        <input type="text" wire:model="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug:</label>
                        <input type="text" wire:model="slug" id="slug" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('slug') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                        <textarea wire:model="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                        <textarea wire:model="content" id="content" class="ckeditor shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        @error('content') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Categories:</label>
                        @foreach($categories as $category)
                            <div class="flex items-center">
                                <input type="checkbox" wire:model="selectedCategories.{{ $category->id }}" id="category_{{ $category->id }}" class="mr-2">
                                <label for="category_{{ $category->id }}">{{ $category->title }}</label>
                            </div>
                        @endforeach
                        @error('selectedCategories') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="start_date_time" class="block text-gray-700 text-sm font-bold mb-2">Start Date & Time:</label>
                        <input type="datetime-local" wire:model="start_date_time" id="start_date_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('start_date_time') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="end_date_time" class="block text-gray-700 text-sm font-bold mb-2">End Date & Time:</label>
                        <input type="datetime-local" wire:model="end_date_time" id="end_date_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('end_date_time') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                    <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Save
                    </button>

                    <button wire:click="closeModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                @this.set('content', editor.getData());
                });
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
