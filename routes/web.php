<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Crud\ArtistComponent;
use App\Http\Livewire\Crud\CreateComponent;
use App\Http\Livewire\Crud\EditComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\FeaturedComponent;
use App\Http\Livewire\SignupComponent;
use App\Http\Livewire\LoginComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/dashboard', ArtistComponent::class)->name('artists');
Route::get('/create-artist', CreateComponent::class)->name('create-artist');
Route::get('/edit-artist/{id}', EditComponent::class)->name('edit-artist');
Route::get('/featured', FeaturedComponent::class)->name('featured');
Route::get('/signup', SignupComponent::class)->name('signup');
Route::get('/login', LoginComponent::class)->name('login');
