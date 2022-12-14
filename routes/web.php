    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\WishlistController;
use App\Models\Post;

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
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
        'posts' => Post::all(),


    ]);

});



Route::get('/pukultikus', function () {
return view('pukultikus.index', [
'active' => 'home',

]);
});


Route::get('/2048', function () {
return view('2048.index', [
'active' => 'home',
]);
});


Route::get('/snake', function () {
return view('snake.index', [
'active' => 'home',
]);
});

Route::get('/tictactoe', function () {
return view('tictactoe.index', [
 'active' => 'home',
]);
});

Route::get('/api', function () {
    return view('api.index', [
     'active' => 'home',
    ]);
    });





Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
        'posts' => Post::all(),

    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'About',
    ]);
});
// route login
// Route::get('/login', [LoginController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// route register
// Route::get('/register', [RegisterController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);



// Route::get('/', function () {
//     return view('home', [
//         'title' => 'Home',
//         'active' => 'home',
//         'posts' => Post::all(),

//     ]);
// })->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('admin');



Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');


Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');




