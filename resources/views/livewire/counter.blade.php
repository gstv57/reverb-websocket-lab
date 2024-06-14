<div class="flex flex-col justify-center py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg dark:text-white">
           Contador {{ $counter }}
        </div>
    </div>
    {{-- botão para incrementar --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button
            wire:click="increment"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-1">
            Incrementar
        </button>
    </div>
</div>
