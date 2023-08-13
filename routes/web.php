<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductTitleController;
use App\Http\Controllers\ProductColorController;
use App\Http\Controllers\ProductSizeController;
use App\Http\Controllers\ProductStorageController;
use App\Http\Controllers\ProductUseController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function (){
    // Route::get('dashboard', function (){
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('me', [AuthController::class, 'profile'])->name('profile');
    // Route::resource('category', CategoryController::class);
    // Route::resource('company', CompanyController::class);
    // Route::resource('maker', MakerController::class);
});
// Route::get('/category',[CategoryController::class,'index'])->name('category');

Route::group(['middleware' => ['auth']], function() {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::get('admin/dashboard', function (){
        return view('dashboard');
    })->name('admin/dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/brand', BrandController::class);
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/company', CompanyController::class);
    Route::resource('admin/maker', MakerController::class);
    Route::resource('admin/productTitle', ProductTitleController::class);
    Route::resource('admin/productColor', ProductColorController::class);
    Route::resource('admin/productSize', ProductSizeController::class);
    Route::resource('admin/productStorage', ProductStorageController::class);
    Route::resource('admin/productUsed', ProductUseController::class);
});