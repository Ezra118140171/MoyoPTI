<x-app-layout>
    <x-slot name="header">
        {{ __('Detail Menu') }}
    </x-slot>

    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <div class="flex grid grid-cols-2 gap-4 justify-center place-content-center  mx-3">
                <div class="text-xl text-primary">Nama Menu</div>
                <div class="text-xl text-primary">:&Tab;Kopi Susu</div>
                <div class="text-xl text-primary">Status</div>
                <div class="text-xl text-primary">:&Tab;Ada</div>
                <div class="text-xl text-primary">Harga</div>
                <div class="text-xl text-primary">:&Tab; Rp 69.420</div>
                <div class="text-xl text-primary">Gambar :</div>
                <img class="h-56 lg:h-60 w-56 object-cover"
                    src="https://images.unsplash.com/photo-1559496417-e7f25cb247f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                    alt="">

                <div class="flex gap-2 justify-start">
                    <a href="{{ route('menu/edit') }}"
                        class="inline-block bg-yellow-400 w-fit p-2 rounded text-white hover:bg-blue-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6]5 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                    <form action="" method="">
                        <a href=""
                        class="inline-block bg-red-600 w-fit p-2 rounded text-white hover:bg-red-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
