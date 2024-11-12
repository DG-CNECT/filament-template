<?php

use App\Http\Controllers\PageController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');

Route::view('/profile', 'profile')->name('profile')->middleware('auth');

Route::view('/systems', 'systems')->name('systems');

Route::get('/page/{page}', static fn(string $page, bool $profile = false): Application|Factory|View|RedirectResponse|Redirector => (new PageController())->show($page, $profile))->name('page.show');

Route::redirect('/laravel/login', '/login')->name('login');

//require __DIR__.'/auth.php';
