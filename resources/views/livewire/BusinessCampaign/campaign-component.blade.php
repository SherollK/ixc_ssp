<!-- resources/views/live-wire/BusinessCampaign/campaign-component.blade.php -->

<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <button wire:click="create()" class="btn btn-primary">Create Campaign</button>

    @if($isOpen)
        @include('livewire.BusinessCampaign.create')
    @endif

    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th>Start Date & Time</th>
            <th>End Date & Time</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($campaigns as $campaign)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $campaign->title }}</td>
                <td>{{ $campaign->description }}</td>
                <td>{{ $campaign->start_date_time }}</td>
                <td>{{ $campaign->end_date_time }}</td>
                <td>
                    <button wire:click="view({{ $campaign->id }})" class="btn btn-info">View</button>
                    <button wire:click="edit({{ $campaign->id }})" class="btn btn-primary">Edit</button>
                    <button wire:click="delete({{ $campaign->id }})" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
