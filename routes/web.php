<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\client\ProductController as ProductClientController;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController; 

// use App\Http\Controllers\EmailController; 
 

Route::get('login', function () {
    return view('login');
})->name('login');


Route::get('member', function () {
    return view('client.contents.products.member');
})->name('member');
 
Route::get('/', [HomeController::class, 'index'])->name('home'); 


Route::get('huongdanmuahang', function () {
    return view('client.contents.purchaseguide');
})->name('huongdanmuahang');

Route::get('feedback', function () {
    $feedback = Feedback::get();
    return view('client.contents.feedback', compact('feedback'));
})->name('feedback');



Route::prefix('products')->as('products.')->group(function () {
    Route::get('/', [ProductClientController::class, 'index'])->name('listProduct');
    Route::get('detailProduct/{slug}', [ProductClientController::class, 'detailProduct'])->name('detailProduct');
    Route::get('category/{slug}', [ProductClientController::class, 'listProductCategory'])->name('category'); 
    Route::get('search', [ProductClientController::class, 'search'])->name('search');
}); 

// Route để thêm sản phẩm vào giỏ hàng
Route::post('addToCart/{productId}', [CheckoutController::class, 'addToCart'])->name('addToCart');
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout'); 

Route::post('addToMemberCart', [CheckoutController::class, 'addToMemberCart'])->name('addToMemberCart');
Route::post('addToMemberCart2', [CheckoutController::class, 'addToMemberCart2'])->name('addToMemberCart2');
Route::post('addToMemberCart3', [CheckoutController::class, 'addToMemberCart3'])->name('addToMemberCart3');
Route::post('addToMemberCart4', [CheckoutController::class, 'addToMemberCart4'])->name('addToMemberCart4');
Route::get('checkout2', [CheckoutController::class, 'checkout2'])->name('checkout2'); 


Route::get('qrcode', function () { 
    $infoSession = session('cart');
    return view('client.contents.payment.qrcode',compact('infoSession'));
})->name('qrcode');

 
Route::get('/check-transaction-status', [PaymentController::class, 'checkTransactionStatus'])->name('check.transaction.status');
Route::post('/payment/create', [PaymentController::class, 'createPayment'])->name('payment.create');
Route::get('/payment/pending', [PaymentController::class, 'paymentPending'])->name('payment.pending');
Route::get('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment/failed', [PaymentController::class, 'paymentFailed'])->name('payment.failed');


// Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


 
Route::prefix('admin')->as('admin.')->middleware('auth')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::prefix('categories')->as('categories.')->group(function () {
            Route::get('/', [CategoryController::class, 'listCategory'])->name('listCategory');
            Route::get('detailCategory/{slug}', [CategoryController::class, 'detailCategory'])->name('detailCategory');
            Route::post('updateCategory', [CategoryController::class, 'updateCategory'])->name('updateCategory');
            Route::post('updateSubCategory', [CategoryController::class, 'updateSubCategory'])->name('updateSubCategory');
            Route::post('addSubCategory', [CategoryController::class, 'addSubCategory'])->name('addSubCategory');
            Route::post('addCategory', [CategoryController::class, 'addCategory'])->name('addCategory');
        });

        Route::prefix('products')->as('products.')->group(function () {
            Route::get('/', [ProductController::class, 'listProduct'])->name('listProduct');
            Route::get('addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
            Route::post('addProduct', [ProductController::class, 'addProductNew'])->name('addProduct');
            Route::get('detailProduct/{slug}', [ProductController::class, 'detailProduct'])->name('detailProduct');
            Route::get('deleteProduct/{slug}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
            Route::get('editProduct/{slug}', [ProductController::class, 'editProduct'])->name('editProduct');
            Route::post('editProduct/{slug}', [ProductController::class, 'editProductNew'])->name('editProduct');
            Route::get('search', [ProductController::class, 'search'])->name('searchProducts');
        });

        Route::prefix('orders')->as('orders.')->group(function () {
            Route::get('/', [OrderController::class, 'ListOrder'])->name('ListOrder'); 
            Route::get('search', [OrderController::class, 'search'])->name('searchOrder');
            
        });
    });
 
Route::get('/get-subcategories/{parentId}', [ProductController::class, 'getSubCategories']);

 
// Route::get('/email', [EmailController::class, 'showForm'])->name('email.form');
// Route::post('/email', [EmailController::class, 'storeEmail'])->name('email.store');


 