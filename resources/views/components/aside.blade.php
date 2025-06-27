<aside class="fixed top-0 left-0 z-40 w-64 h-screen bg-white border-r border-gray-200 shadow-md">
    <div class="h-full px-4 py-6">
        <!-- Logo -->
        <div class="flex items-center justify-center mb-8">
            <span class="text-2xl font-bold">
                <span class="text-orange-500">MY</span><span class="text-blue-600">KOST</span>
            </span>
        </div>

        <!-- Navigation -->
        <nav class="space-y-2">
            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg transition {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0h-1m0 0V5m0 6v10"></path>
                </svg>
                Homepage
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg transition {{ request()->routeIs('booking*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2-2v16a2 2 0 002 2z" />
                </svg>
                Booking
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg transition {{ request()->routeIs('pengaduan*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.5 0L4.268 18.5c-.77.833.192 2.5 1.732 2.5z" />
                </svg>
                Pengaduan
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg transition {{ request()->routeIs('invoice*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Invoice
            </a>

            <form method="POST" action="#">
                @csrf
                <button type="submit"
                    class="flex items-center w-full px-4 py-3 text-red-600 rounded-lg hover:bg-red-50 transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </button>
            </form>
        </nav>
    </div>
</aside>
