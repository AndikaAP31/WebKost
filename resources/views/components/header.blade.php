<header class="fixed top-0 left-64 right-0 z-30 bg-white border-b shadow-sm h-16 flex items-center px-6 justify-between">
    <!-- Greeting -->
    <h1 class="text-xl font-semibold text-gray-800">
        Hi, {{ Auth::user()->name ?? 'User' }} !!
    </h1>

    <!-- Right side -->
    <div class="flex items-center space-x-6 text-sm text-gray-600">
        <!-- Time -->
        <span id="current-time"></span>
        <!-- Date -->
        <span>{{ now()->format('M d, Y') }}</span>
    </div>
</header>

<script>
    function updateTime() {
        const now = new Date();
        const options = { hour: '2-digit', minute: '2-digit', hour12: true };
        const timeString = now.toLocaleTimeString('en-US', options);
        document.getElementById('current-time').textContent = timeString;
    }

    updateTime();
    setInterval(updateTime, 60000);
</script>
