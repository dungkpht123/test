<?php

namespace App\Http\Controllers;

use App\Helper\CartHelper;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin;
use App\Http\Controllers\User;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\SettingController;
use App\Http\Controllers\User\ControllerLogin;
use App\Http\Controllers\User\PassController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ControllerRegi;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CartManagerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\QuanLySanPhamController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\qlcommentController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ResetPassController;
use App\Http\Controllers\Admin\SendmailController;

// use App\Http\Controllers\Admin\MenuController;

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
// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'admin'])->name('admin');

    // QUAN LY WEBSITE
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::get('/banner', [UserController::class, 'menu'])->name('banner');

    //QUAN LY SAN PHAM
    Route::resource('account', AccountController::class);
    Route::resource('users', UsersController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::get('thongso/{id?}', [ProductController::class, 'thongso'])->name('thongso');
    Route::post('thongso/{id?}', [ProductController::class, 'post_thongso']);

    Route::get('thietlap', [QuanLySanPhamController::class, 'index'])->name('thietlap');
    Route::get('file', [FileController::class, 'index'])->name('file');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // CART
    Route::resource('cart',CartManagerController::class);

    Route::get('/cart_view',[CartManagerController::class, 'view'])->name('cart_view');
    Route::get('/cart_success-{id?}',[CartManagerController::class, 'cart_success'])->name('cart_success');
    Route::get('/cart_cancel-{id?}',[CartManagerController::class, 'cart_cancel'])->name('cart_cancel');
    Route::get('/cart_detail-{id?}',[CartManagerController::class, 'cart_detail'])->name('cart_detail');

    //
    Route::get('/add_account', [LoginController::class, 'addaccount'])->name('addaccount');

    // POST BÀI VIẾT
    Route::resource('post', PostController::class);

    // Setting
    Route::resource('/profile', SettingsController::class);
    Route::resource('/reset', ResetPassController::class);
    // quản lý thư
    Route::resource('/qlthu', SendmailController::class);
    // quản lý comment
    Route::resource('/qlcomment', qlcommentController::class);


});

// LOGIN ADMIN
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
// re
Route::get('/register', [ControllerRegi::class,'index']);
Route::post('/register', [ControllerRegi::class,'store']);
// gg
Route::get('/login-google', [ControllerLogin::class, 'login_google']);
Route::get('/car_td/google/callback',[ControllerLogin::class, 'callback_google']);
// USER
Route::group(['prefix' => 'car_td'], function () {
    Route::get('/', [UserController::class, 'index'])->name('home');
    // LOGIN USER
    Route::get('/login_user', [ControllerLogin::class,'login'])->name('login_user');
    Route::post('/login_user', [ControllerLogin::class,'postlogin']);
    Route::get('/signup_user', [ControllerLogin::class,'signup_user'])->name('signup_user');
    Route::post('/signup_user', [ControllerLogin::class,'post_signup_user']);
    Route::get('/logout_user', [ControllerLogin::class,'logout'])->name('logout_user');
    // đổi mật khẩu
    Route::resource('/reset', PassController::class);
    // Profile
    Route::resource('/setting', SettingController::class);
    //
    Route::get('/about', [UserController::class, 'about'])->name('about');
    Route::get('/blog', [UserController::class, 'blog'])->name('blog');
    Route::get('/blog_single', [UserController::class, 'blog_single'])->name('blog_single');
    Route::resource('/contact', ContactController::class);

    // CART
    Route::get('/cart_add/{id}',[CartController::class, 'add'])->name('cart_add');
    Route::get('/cart_remove/{id?}',[CartController::class, 'remove'])->name('cart_remove');
    Route::get('/cart_update/{id?}',[CartController::class, 'update'])->name('cart_update');
    Route::get('/cart_clear',[CartController::class, 'clear'])->name('cart_clear');
    Route::get('/Mycart',[CartController::class, 'Mycart'])->name('Mycart');

    Route::group(['prefix' => 'checkout'], function () {
        Route::get('/', [CheckoutController::class, 'index'])->name('checkout');
        // Route::get('/form_checkout', [CheckoutController::class, 'form'])->name('form_checkout');
        Route::post('/form_checkout', [CheckoutController::class, 'submit_form'])->name('form_checkout');

    });

    Route::get('/compare/{id?}', [UserController::class, 'compare'])->name('compare');

    // CONTACT

    Route::get('/error', [UserController::class, 'error'])->name('error');
    // SAN PHAM
    Route::get('/{slug}', [UserController::class, 'purchase'])->name('purchase');

    // SAN PHẨM CHI TIẾT
    Route::get('/{slug}/{id?}', [UserController::class, 'purchase_new_single'])->name('purchase_new_single');
    Route::get('/purchase_old', [UserController::class, 'purchase_old'])->name('purchase_old');
    Route::get('/purchase_used', [UserController::class, 'purchase_used'])->name('purchase_used');
    // Bán xe cũ
    Route::get('/sell_step', [UserController::class, 'sell_step'])->name('sell_step');
    // comment
    Route::get('/comments', [App\Http\Controllers\User\DetailProductController::class, 'showAllComment'])->name('comments.showall');
    Route::post('/send-comments', [App\Http\Controllers\User\DetailProductController::class, 'sendComment'])->name('comments.send');
});
