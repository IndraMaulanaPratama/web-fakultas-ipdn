<?php

use App\Http\Livewire\Admin\AccountManager;
use App\Http\Livewire\Admin\CategoryManager;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Menu\Main;
use App\Http\Livewire\Admin\Setting\Contact;
use App\Http\Livewire\Admin\Setting\Content;
use App\Http\Livewire\Admin\Setting\Testimoni;
use App\Http\Livewire\Category\ListBerita as CategoryListBerita;
use App\Http\Livewire\Category\ListCategory;
use App\Http\Livewire\Component\Admin\ArticleManager\EditArticle;
use App\Http\Livewire\Component\Admin\ArticleManager\TrashData;
use App\Http\Livewire\DetailBerita\DetailBerita;
use App\Http\Livewire\Homepage\Homopage;
use App\Http\Livewire\ListBerita\ListBerita;
use App\Http\Livewire\Login\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// Route untuk halaman sebelum login
Route::middleware('guest')->group(function () {
    // Public Homepage
    Route::get('/', Homopage::class);

    // Public List Berita
    Route::get('/berita', ListBerita::class)->name('list-berita');

    // Public Detail Berita
    Route::get('/post/{id}', DetailBerita::class)->name('detail-berita');

    // Public List Kategori
    Route::get('/kategori', ListCategory::class)->name('list-category');

    // Public List Berita Berdasarkan Kategori
    Route::get('/kategori/{categoryId}', CategoryListBerita::class)->name('list-berita-by-kategori');

    // Login Page
    Route::get('/ipdn-kampus-daerah/login', Login::class)->name('login');
});

// Route Dashboard
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Dashboard
    Route::get('/home', Dashboard::class)->name('home');

    // Account Manager
    Route::get('/account-manager', AccountManager::class)->name('account-manager');


    /*** POST AREA */
    Route::get('/postingan', function () {
        return view('livewire.admin.article-manager');
    }); // Daftar Postingan

    Route::get('/postingan/create', function () {
        return view('livewire.admin.post-article');
    }); // Buat Postingan

    Route::get('/postingan/edit/{id}', EditArticle::class); // Edit Postingan
    Route::get('/category-manager', CategoryManager::class)->name('category-manager'); // Category Manager
    Route::get('/postingan/trash/', TrashData::class); // Trash Data Postingan & Category
    /*** END OF POST AREA */

    /** MENU AREA */
    Route::get('/menu', Main::class)->name('menu-manager');
    /*** END OF MENU AREA */


    /*** SETTING AREA */
    Route::get('/setting/general', Content::class); // General Setting
    Route::get('/setting/testimoni', Testimoni::class); // Testimoni Setting
    Route::get('/setting/contact', Contact::class); // Contact Setting
    /*** END OF SETTING AREA */
});

// Logout
Route::get('/logout', function (Request $request) {
    Auth::guard('web');
    $request->session()->flush();
    return redirect()->route('login');
})->middleware(['auth:sanctum'])->name('logout');
