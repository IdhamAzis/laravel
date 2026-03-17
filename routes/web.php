<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Models\Message;

// Route::prefix('admin')->group(function () {
//     Route::get('/contact', function () {
//         return view('contact');
//     });
    
//     Route::get('/gmap', function () {
//         return view('gmap');
//     });
// });

// Route::get('/welcome', function () {
//     $name = 'Idham Azis Pangestu';
//     return view('welcome', ['name' => $name]);
// });



Route::get('/home', function () {
    $userType = 'admin';
    return view('home', ['userType' => $userType]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gmap', function () {
    return view('gmap');
});

Route::get('/profile', function () {
    $messages = Message::latest()->get();
    return view('profile', compact('messages'));
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/products', function () {
    $products = ['Laptop', 'Keyboard', 'Mouse', 'Monitor'];
    return view('products', ['products' => $products
    ]);
});

Route::post('/message', [MessageController::class, 'store']);

Route::get('/mahasiswa/{nama}', function ($nama) {
    return 'halo ' . $nama;
});