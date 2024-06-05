<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <button wire:click="create()" class="btn btn-primary">Create New Campaign</button>
    @if($isOpen)
        @include('livewire.create')
    @endif
    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($campaigns as $campaign)
            <tr>
                <td>{{ $campaign->id }}</td>
                <td>{{ $campaign->title }}</td>
                <td>{{ $campaign->description }}</td>
                <td>
                    <button wire:click="edit({{ $campaign->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $campaign->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
