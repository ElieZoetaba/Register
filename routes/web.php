<?php
use index;
use App\Controller\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('crud', function () {
//     return view('create');
// });

Route::group([], function () {
    Route::get('tasks', function () {

        $tasks = DB::table('posts')->get();
        return view('tasks', compact('tasks'));
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [App\Http\Controllers\PostController::class, 'index'])->name('tasks');
Route::get('/create', [App\Http\Controllers\PostController::class, 'index'])->name('create');
Route::get('/show', [App\Http\Controllers\PostController::class, 'index'])->name('show');
Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit']);
Route::resource("/create", App\Http\Controllers\PostController::class);


