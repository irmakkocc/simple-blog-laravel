<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\Giris;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\ConfigController;

/*Admin- Back Routes*/
Route::get('admin/giris', [Giris::class, 'login'])->name('admin.login');
Route::post('admin/giris', [Giris::class, 'loginPost'])->name('admin.login.post');

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
    Route::get('panel', [Dashboard::class, 'index'])->name('dashboard');
    //makale
    Route::get('makaleler/silinenler', [ArticleController::class, 'trashed'])->name('trashed.article');
    Route::get('cikis', [Giris::class, 'logOut'])->name('logout');
    Route::resource('makaleler', ArticleController::class)->names('makaleler');
    Route::get('/switch', [ArticleController::class, 'switch'])->name('switch');
    Route::get('/deletearticle/{id}', [ArticleController::class, 'delete'])->name('delete.article');
    Route::get('/harddeletearticle/{id}', [ArticleController::class, 'hardDelete'])->name('hard.delete.article');
    Route::get('/recoverarticle/{id}', [ArticleController::class, 'recover'])->name('recover.article');

    //kategori

    Route::get('/kategoriler',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/kategori/status',[CategoryController::class, 'switch'])->name('category.switch');
    Route::post('/kategori/create',[CategoryController::class, 'create'])->name('category.create');
    Route::get('/kategori/deleteData',[CategoryController::class, 'deleteData'])->name('category.deleteData');
    

    //config

    Route::get('/ayarlar',[ConfigController::class, 'index'])->name('config.index');
    Route::post('/ayarlar/update',[ConfigController::class, 'update'])->name('config.update');
    
});



/*Front Routes*/

Route::get('/', [Homepage::class, 'index'])->name('homepage');
Route::get('/kategori/{category}',[Homepage::class, 'category'])->name('category');
Route::get('/{category}/{slug}',[Homepage::class, 'single'])->name('single');
Route::get('/aktif-degil', function(){
    return view('front.active');
});




