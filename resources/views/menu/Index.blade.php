<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
                @foreach ($menus as $menu)
                    <div class="bg-white rounded-lg border shadow-md max-w-3xs md:max-w-none overflow-auto">
                        <img class="h-56 lg:h-60 w-full object-cover" src={{ $menu->image }} alt="" />
                        <div class="p-3">
                            <h3 class="font-bold text-3xl leading-6 text-gray-700 my-2 pb-2">
                                {{ $menu->menuname }}
                            </h3>
                            <span class="text-xl text-primary">Harga :</span>
                            <span class="text-xl text-primary">
                                {{ $menu->price }}
                            </span>
                            <div class="flex justify-between pt-4">
                                <span class="text-xl text-primary">Status Stok</span>
                                <label for="toggle-example" class="flex items-center cursor-pointer relative mb-4">
                                    <input type="checkbox" id="toggle-example" class="sr-only">
                                    <div class="toggle-bg bg-gray-400 border-2 border-gray-200 h-6 w-11 rounded-full">
                                        {{-- Status --}}
                                    </div>
                                </label>
                            </div>

                            <div class="flex justify-item-strech gap-1">
                                <a href="{{ route('menu/edit') }}"
                                    class="inline-block justify-self-start bg-yellow-400 w-fit p-2 rounded text-white hover:bg-blue-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>

                                <a href="{{ route('menu/show') }}"
                                    class="inline-block justify-self-start bg-blue-600 w-fit p-2 rounded text-white hover:bg-blue-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>

                                <form action="" method="POST">
                                    <a href=""
                                        class="inline-block justify-self-end bg-red-600 w-fit justify-self-end p-2 rounded text-white hover:bg-red-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </a>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
