<x-app-layout>
    <x-slot name="header">
            {{ __('Informasi Meja') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <div class="m-4 text-4xl font-medium text-gray-700 border-b border-gray-400">
                <p>Detail meja</p>
            </div>

            <div class="max-w-xl flex grid grid-cols-2 gap-4 justify-center place-content-center h-48 mx-3">
                <div class="text-xl text-primary">Nomor Meja</div>
                <div class="text-xl text-primary">:&Tab;1</div>
                <div class="text-xl text-primary">Status</div>
                <div class="text-xl text-primary">:&Tab;Kosong</div>
                <div class="text-xl text-primary">Generate QR</div>
                <div class="text-xl text-primary">:&Tab; (belum ada data)</div>
                <form action="" method="">
                    <a href=""
                    class="my-2 inline-block bg-green-600 w-fit p-2 rounded text-white hover:bg-green-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                        <label class="'block text-md text-white" for="status">selesaikan</label>
                    </a>
                </form>
            </div>

            <div class="text-3xl font-bold text-primary my-4 mx-3 pt-3">Pesanan</div>
            <div class="max-w-xl flex grid grid-cols-2 gap-4 justify-center place-content-center mx-3">
                <div class="text-xl text-primary">Kopi Susu</div>
                <div class="text-xl text-primary">:&Tab;1</div>
                <div class="flex gap-2">
                    <form action="" method="">
                        <a href=""
                        class="my-2 inline-block bg-green-600 w-fit p-2 rounded text-white hover:bg-green-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                            <label class="'block text-md text-white" for="status">Sudah Bayar</label>
                        </a>
                    </form>
                    <a href=""
                        class="my-2 inline-block bg-red-600 w-fit p-2 rounded text-white hover:bg-red-800 transition-colors duration-50 hover:ease-in-out font-semibold">
                            <label class="'block text-md text-white" for="status">Batalkan pesanan</label>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
