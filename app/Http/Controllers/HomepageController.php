<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // /**
    //  * Display the homepage view
    //  *
    //  * @return \Illuminate\View\View
    //  */
    public function showhomepage()
    {
        // Data kamar untuk ditampilkan (static data untuk UI only)
        $rooms = [
            [
                'id' => 1,
                'type' => 'Kamar Standard',
                'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&h=250&fit=crop',
                'description' => 'Kamar nyaman dengan fasilitas standar'
            ],
            [
                'id' => 2,
                'type' => 'Kamar Standard',
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400&h=250&fit=crop',
                'description' => 'Kamar nyaman dengan fasilitas standar'
            ],
            [
                'id' => 3,
                'type' => 'Kamar Elite',
                'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=400&h=250&fit=crop',
                'description' => 'Kamar dengan fasilitas lebih lengkap'
            ],
            [
                'id' => 4,
                'type' => 'Kamar Exclusive',
                'image' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?w=400&h=250&fit=crop',
                'description' => 'Kamar mewah dengan fasilitas premium'
            ],
            [
                'id' => 5,
                'type' => 'Kamar Exclusive',
                'image' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=400&h=250&fit=crop',
                'description' => 'Kamar mewah dengan fasilitas premium'
            ],
            [
                'id' => 6,
                'type' => 'Kamar Exclusive',
                'image' => 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=400&h=250&fit=crop',
                'description' => 'Kamar mewah dengan fasilitas premium'
            ]
        ];

        // Data user untuk ditampilkan di sidebar
        $user = [
            'name' => 'Kenny',
            'greeting' => 'Hi, Kenny !!'
        ];

        return view('users/homepage', compact('rooms', 'user'));
    }

    /**
     * Show room details (placeholder for future development)
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    // public function showRoom($id)
    // {
    //     // Placeholder untuk detail kamar
    //     // Untuk saat ini hanya redirect kembali ke homepage
    //     return redirect()->route('users.homepage')->with('message', 'Detail kamar akan segera tersedia');
    // }
}