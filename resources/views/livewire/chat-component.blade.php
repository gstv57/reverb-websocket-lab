<div>

    <div class="container bg-white text-black w-full h-full rounded">
        @foreach ($convo as $item)
            <span class="m-1">{{ $item['username'] }}: {{ $item['message'] }} <br></span>
        @endforeach
    </div>

    <form wire:submit="submitMessage" class="mt-1">
        <x-text-input wire:model="message"></x-text-input>
        <x-primary-button type="submit">Send</x-primary-button>
    </form>
</div>
