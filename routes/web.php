<?php

use App\Http\Controllers\CoffeeShopController;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [CoffeeShopController::class, 'home'])->name('home');
Route::get('/menu', [CoffeeShopController::class, 'menu'])->name('menu');
Route::get('/biji-kopi', [CoffeeShopController::class, 'beans'])->name('beans');
Route::get('/biji-kopi/{slug}', [CoffeeShopController::class, 'beanDetail'])->name('beans.detail');
Route::get('/tentang', [CoffeeShopController::class, 'about'])->name('about');
Route::get('/ruang-suasana', [CoffeeShopController::class, 'atmosphere'])->name('atmosphere');
Route::get('/wholesale', [CoffeeShopController::class, 'wholesale'])->name('wholesale');
Route::post('/wholesale', [CoffeeShopController::class, 'submitWholesale'])->name('wholesale.submit');
Route::get('/wholesale/sukses/{id}', [CoffeeShopController::class, 'wholesaleSuccess'])->name('wholesale.success');
Route::get('/kontak', [CoffeeShopController::class, 'contact'])->name('contact');
Route::post('/kontak', [CoffeeShopController::class, 'submitContact'])->name('contact.submit');

// Technical SEO Routes
Route::get('/sitemap.xml', [CoffeeShopController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [CoffeeShopController::class, 'robots'])->name('robots');
