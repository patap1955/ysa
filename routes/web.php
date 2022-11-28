<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');

//Route::get("/home", [\App\Http\Controllers\HomeController::class, "index"])->name("home");
//Route::post("/home", [\App\Http\Controllers\HomeController::class, "contact"])->name("contact");

Auth::routes();

Route::prefix('amg-admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\AdminController::class)->name("admin.index");
    Route::get("contacts", [\App\Http\Controllers\Admin\AdminContactsController::class, "index"])->name("admin.contacts");
    Route::post("gallery/{article}/img/delete", [\App\Http\Controllers\Admin\AdminImagesController::class, "deleteImageArticle"]);
    Route::resource("gallery", \App\Http\Controllers\Admin\AdminGalleryController::class);
    Route::resource("article", \App\Http\Controllers\Admin\AdminArticlesController::class);
    Route::resource("setting", \App\Http\Controllers\Admin\SettingsController::class);
    Route::patch("contacts/{contact}", [\App\Http\Controllers\Admin\AdminContactsController::class, "completedStatus"])->name("admin.contacts.completed");
    Route::get("metrica", [\App\Http\Controllers\Admin\MetricaController::class, "index"])->name("metrica.index");
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

