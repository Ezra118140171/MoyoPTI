<x-app-layout>
    <x-slot name="header">
        {{ __('Tambah Menu') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="m-4 text-4xl font-medium text-gray-700 border-b border-gray-400">
            <p>Masukan Data menu</p>
        </div>
        <div class="max-w-lg px-6 py-3">
            <form action="{{ route('menu') }}" method="POST">
                @csrf
                <div class=" border-gray-400">
                    {{-- <div>
                        <x-label for="name" value="Nama toko anda" />
                        <select name="user_id" id="user_id" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
                            <option value="" disabled>Pilih pemilik Toko</option>
                            @forelse ($users as $user)
                            <option value="{{ $user->id }}" {{ old('user_id')==$user->id ? 'selected' : '' }}>{{
                                $user->name }}
                            </option>
                            @empty
                            <option value="" disabled>Belum ada User terdaftar</option>
                            @endforelse
                        </select>
                    </div> --}}
                    <div>
                        <x-label for="menuname" value="Nama Makanan atau Minuman" />
                        <x-input type="text" name="menuname" id="menuname" required />
                    </div>
                    <div>
                        <x-label for="price" value="Harga Makanan atau Minuman" />
                        <x-input type="text" name="price" id="price" required />
                    </div>
                    <div>
                        <x-label for="image" value="Foto Makanan" />
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-blue-200 hover:border-blue-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p
                                    class='lowercase text-sm text-blue-400 group-hover:text-blue-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                            </div>
                            <input type='file' name="image" id="image" required />
                        </label>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <x-button>
                        {{ __('Submit') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
