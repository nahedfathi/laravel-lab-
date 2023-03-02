<?php
use App\Http\Controllers\post_controller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
 


 




Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
///////////////////////////////////////////////
Route::get('/auth/redirect', function () {
return Socialite::driver('github')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});




    ////////////////////////////////////////////
    Route::get('show',[post_controller::class, 'getPosts'] )->name('get_posts');
    Route::get('showpostinfo/{id}',[post_controller::class, 'getPostsInfo'] )->name('show_post');
    
    Route::get('show_user',[post_controller::class, 'show_users'] )->name('user.show');
    Route::get('showuserinfo/{id}',[post_controller::class, 'show_user_info'])->name('user.showinfo');

Route::delete('delete/{id}', [post_controller::class, 'destroy'])->name('post.destroy');


Route::get('update/{id}', [post_controller::class, 'update'])->name('post.update');

Route::put('edit/{id}', [post_controller::class, 'edit'])->name('post.edit');


Route::get('create', [post_controller::class, 'create'])->name('post.create');
Route::post('store', [post_controller::class, 'store'])->name('post.store');

});
