@if ($message = Session::get('success'))
    <div class="inline-flex w-full mb-4 overflow-hidden bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-center w-12 bg-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-green-500">Success</span>
                <p class="text-sm text-gray-600">{{ $message }}</p>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('edited'))
    <div class="inline-flex w-full mb-4 overflow-hidden bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-center w-12 bg-grey-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-grey-500">Edited</span>
                <p class="text-sm text-gray-600">{{ $message }}</p>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('destroyed'))
    <div class="inline-flex w-full mb-4 overflow-hidden bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-center w-12 bg-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-yellow-500">Destroyed</span>
                <p class="text-sm text-gray-600">{{ $message }}</p>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('failed'))
    <div class="inline-flex w-full mb-4 overflow-hidden bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-center w-12 bg-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-red-500">Failed</span>
                <p class="text-sm text-gray-600">{{ $message }}</p>
            </div>
        </div>
    </div>
@endif

