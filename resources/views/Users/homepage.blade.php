@extends('users.main')

@section('title', 'Homepage')

@section('page-header')
<div class="flex items-center justify-between">
    <h1 class="text-2xl font-bold text-gray-800">Pilih Kamar</h1>
    <div class="text-sm text-gray-600">
        Selamat datang, {{ Auth::user()->name ?? 'User' }}!
    </div>
</div>
@endsection

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:ml-64">
    @php
        $rooms = [
            ['name' => 'Kamar Standard', 'img' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7'],
            ['name' => 'Kamar Standard', 'img' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'],
            ['name' => 'Kamar Elite', 'img' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85'],
            ['name' => 'Kamar Exclusive', 'img' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af'],
            ['name' => 'Kamar Exclusive', 'img' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304'],
            ['name' => 'Kamar Exclusive', 'img' => 'https://images.unsplash.com/photo-1566665797739-1674de7a421a'],
        ];
    @endphp

    @foreach ($rooms as $room)
    <div class="room-card bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:shadow-xl transition duration-300" onclick="showRoomDetail('{{ $room['name'] }}')">
        <div class="relative">
            <img src="{{ $room['img'] }}?w=400&h=250&fit=crop" alt="{{ $room['name'] }}" class="w-full h-48 object-cover">
            <div class="absolute bottom-4 right-4 bg-white/80 backdrop-blur px-4 py-2 rounded-lg flex items-center space-x-2">
                <span class="room-type text-sm font-medium text-gray-800">{{ $room['name'] }}</span>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@push('scripts')
<script>
    function showRoomDetail(roomType) {
        alert(`Anda memilih ${roomType}. Detail kamar akan segera tersedia!`);
    }
</script>
@endpush
