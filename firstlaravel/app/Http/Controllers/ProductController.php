<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index ()
    {
        // Data produk dalam bentuk array
        $products = [
            [
                'name' => 'Mclaren P1',
                'description' => 'This is Mclaren P1.',
                'price' => 20000000,
                'image' => 'https://www.wsupercars.com/wallpapers-regular/McLaren/2014-McLaren-P1-015-1080.jpg',
            ],
            [
                'name' => 'BMW M3',
                'description' => 'This is BMW.',
                'price' => 15000000,
                'image' => 'https://www.wsupercars.com/wallpapers-regular/BMW/2001-BMW-M3-Coupe-010-1080.jpg',
            ],
            [
                'name' => 'Mercedes-Benz Silver Arrow Concept',
                'description' => 'This is Mercedes-Benz Silver Arrow Concept.',
                'price' => 2500000000,
                'image' => 'https://www.wsupercars.com/thumbnails/Mercedes-Benz/2012-Mercedes-Benz-Silver-Arrow-Concept-001.jpg',
            ],
        ];

        // Kirim data produk ke view
        return view('products.index', compact('products'));
    }
}
