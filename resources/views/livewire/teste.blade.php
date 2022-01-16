<div>
    <style>
        .search-result {
            z-index: 1000;
            position: absolute;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <h6 wire:click='"dd(13)'>Search:</h6>
            <p>{{ $search }}</p>
            <div class="w-100">
                <input type="text" wire:model="search">
            </div>
        </div>
    </div>

</div>
