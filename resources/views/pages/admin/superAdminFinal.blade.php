<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 to-purple-100 p-6">
        <div
            class="bg-white shadow-xl rounded-2xl p-10 max-w-lg w-full text-center transform transition duration-500 hover:scale-105">

            @if($status === 'success')
                <div class="inline-flex items-center justify-center w-16 h-16 mx-auto bg-green-100 rounded-full mb-6">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-green-700 mb-4">Admin Approved!</h1>
            @elseif($status === 'error')
                <div class="inline-flex items-center justify-center w-16 h-16 mx-auto bg-red-100 rounded-full mb-6">
                    <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-red-700 mb-4">Something went wrong</h1>
            @else
                <div class="inline-flex items-center justify-center w-16 h-16 mx-auto bg-blue-100 rounded-full mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 110-16 8 8 0 010 16z" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-blue-700 mb-4">Info</h1>
            @endif

            <p class="text-gray-600 mb-8">{{ $message }}</p>

            <a href="{{ route('login') }}"
                class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-xl shadow-md transition duration-300">
                Go to Login
            </a>
        </div>
    </div>
</x-guest-layout>