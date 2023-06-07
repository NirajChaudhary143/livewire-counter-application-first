<div>
    <label for="">Search</label>
    <input type="text" wire:model.debounce.1000ms="search">
    <h1>
    {{$search}}
    </h1>
</div>
