<x-app-layout>
    <x-slot name="header">
            {{ __('Informasi Meja') }}
    </x-slot>

    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- @foreach ($collection as $item) --}}
                <div class="flex inline-block pb-4 justify-end">
                    <p>status : </p>
                    <label class=" mx-2 mt-1 h-4 w-4 fill bg-green-600"></label>
                    <p>terisi</p>
                    <label class=" mx-2 mt-1 h-4 w-4 fill bg-yellow-300"></label>
                    <p>konfirmasi pembayaran</p>
                    <label class=" mx-2 mt-1 h-4 w-4 fill bg-gray-400"></label>
                    <p>kosong</p>
                </div>
                <div class="flex grid grid-cols-2 gap-9 place-content-center h-48 m-4 px-28">
                    <a href="{{route('meja.show')}}" class="flex justify-center px-4 py-4 bg-gray-300  rounded">
                        <div>
                            <p class="text-lg text-center text-primary">Meja</p>
                            <p class="text-3xl font-semibold text-center text-gray-800">1</p>
                        </div>
                    </a>
                </div>
            {{-- @endforeach --}}
        </div>
    </div>
</x-app-layout>
