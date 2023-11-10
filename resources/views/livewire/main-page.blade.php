<div>
    @persist('header')
    <x-header></x-header>
    @endpersist

<div x-data class="flex flex-col gap-6 items-center">
    @foreach($posts as $post)
        <livewire:post wire:key="{{ $post->id }}" :post="$post" ></livewire:post>
    @endforeach
        <button x-intersect="$wire.loadMore" wire:click="loadMore">load more</button>
</div>

</div>
