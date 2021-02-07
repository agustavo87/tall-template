<x-layouts.base> 
<x-container class="pt-5">
    <h1 class="text-3xl font-bold pt-12 pb-1">
        Bienvenido!
    </h1>
    <p>A continuación unos ejemplos para probar que todo funcione correctamente</p>

    <h2 class=" text-xl font-medium pt-5 pb-1">
        Alpine Test
    </h2>
    <div x-data="{ open: false }">
        <button @click="open = true" class=" bg-blue-400 font-semibold text-white py-2 px-3 rounded focus:outline-none hover:bg-blue-300">
            Open Dropdown
        </button>
        <ul
            x-show="open"
            @click.away="open = false"
            x-cloak
            class="bg-blue-100 rounded p-3 my-1 w-36"
        >
            Dropdown Body
        </ul>
    </div>
    <h2 class=" text-xl font-medium pt-5 pb-1">Livewire Test: counter</h2>
    <livewire:counter />
</x-container>

</x-layouts.base>
