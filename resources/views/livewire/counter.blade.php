<div>
    <div class="text-center w-32 flex items-center ">
        <button wire:click="increment" true" class=" bg-blue-400 font-semibold text-white py-2 px-3 rounded focus:outline-none hover:bg-blue-300">+</button>
        <div class=" ml-5 text-xs font-bold">{{ $count }}</div>
    </div>
    <p wire:loading class=" text-xs text-gray-400 ml-1 italic">En transacción...</p>
</div>
