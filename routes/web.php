<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestResearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceImageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use function Ramsey\Uuid\v1;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::prefix('')->group(function () {

            Route::get('/', [HomeController::class, 'index']);
            Route::get('/rtl/', [HomeController::class, 'index']);
            // Route::get('/request-research', [RequestResearchController::class, 'requestResearch']);
            // Route::get('/rtl/request-research', [RequestResearchController::class, 'requestResearch']);
            Route::get('/clear', [HomeController::class, 'clear']);

            Route::middleware(['auth'])->group(function () {
                Route::controller(ServiceController::class)->group(function () {

                    Route::get('/request-research', [RequestResearchController::class, 'requestResearch']);
                    Route::get('/rtl/request-research', [RequestResearchController::class, 'requestResearch']);

                    Route::post('/add-request-research', [RequestResearchController::class, 'storeRequestResearch']);

                    Route::get('/download/{file}', [RequestResearchController::class, 'download'])->name('download');
                    // Route::get('/rtl/add-request-research', [RequestResearchController::class, 'storeRequestResearch']);


                    // Route::get('/dashboard', 'index');
                    // Route::get('/services', 'services');
                    // Route::get('/detail/{service}', 'show');
                    // Route::get('/add', 'create');
                    // Route::post('/add-service', 'store');
                    // Route::get('/edit/{service}', 'edit');
                    // Route::post('/edit-service/{service}', 'update');
                    // Route::post('/delete/{service}', 'destroy');
                });
                Route::controller(ServiceImageController::class)->group(function () {
                    Route::post('/detail/{service}/add-service-image', 'addImageService');
                    Route::post('/edit/{service}/edit-service-image/{serviceImage}', 'editImageService');
                    Route::post('/delete/{service}/delete-service-image/{serviceImage}', 'deleteImageService');
                });
                Route::get('/profile', [UserController::class, 'profile']);
            });
            Route::controller(UserController::class)->group(function () {
                Route::get('/sign-up', 'viewSignUp')->name('sign-up');
                Route::post('/register', 'register');
                Route::get('/sign-in', 'viewSignIn')->name('sign-in');
                Route::post('/login', 'login');
                Route::post('/logout', 'logout');
            });
        });
    }
);
