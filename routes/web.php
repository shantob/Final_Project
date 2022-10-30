<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forntend\HomeController as Forntend;
use App\Http\Controllers\backend\HomeController as Backend;
use App\Http\Controllers\backend\BlogController as Blog;
use App\Http\Controllers\backend\CommentController as BackendComment;
use App\Http\Controllers\backend\ProductController as Product;
use App\Http\Controllers\backend\CategoryController as Category;
use App\Http\Controllers\backend\ColorController as Color;
use App\Http\Controllers\backend\BrandController as Brand;
use App\Http\Controllers\backend\SizeController as Size;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\backend\UserController as User;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\OrderController;
use App\Models\Card;

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

// forntend........................................
Route::get('/', [Forntend::class, 'index'])->name('home');
Route::get('/categories/{category}/product', [Forntend::class, 'productListCategory'])->name('frontend.products.index');
Route::get('/products/{product}', [Forntend::class, 'productDetails'])->name('frontend.products.show');
Route::get('/productlist', [Forntend::class, 'productlist'])->name('frontend.products.all');
Route::get('/contact', [Forntend::class, 'contact'])->name('contact');
Route::get('/about', [Forntend::class, 'about'])->name('about');
Route::get('/addtocard', [Forntend::class, 'addtocard'])->name('addtocard');
Route::get('/checkout', [Forntend::class, 'checkout'])->name('checkout');
Route::get('/productdetels', [Forntend::class, 'productdetels'])->name('productdetels');
Route::get('/thankyou', [Forntend::class, 'thankyou'])->name('thankyou');
Route::get('/invoice', [Forntend::class, 'invoice'])->name('invoice');



Route::get('/api/cart', function () {
    return response()->json([
        'data' => [
            'product' => [
                'id' => 1,
                'title' => 'This is product 1'
            ]
        ]
    ]);
});

Route::get('/cart', function () {
    return view('checkout');
});


Route::delete('/cart-items/{cartItem}', function (Card $cartItem) {
    $cartItem->delete();
    return response()->json([
        'status' => true,
        'message' => 'Successfully Deleted'
    ]);
});




require __DIR__ . '/auth.php';


Route::middleware('auth')->group(function () {

    Route::get('/cart-items', function () {

        $carts = auth()->user()->carts;

        $carts->load('products');

        // dd($carts);

        $data = [];

        foreach ($carts as $value) {
            $data[] =  [
                'id' => $value->id,
                'title' => $value->products?->name,
                'qty' => $value->qty,
                'unitPrice' => $value->products?->price,
                'totalPrice' => $value->qty * $value->products?->price
            ];
        }

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    });

    Route::get('/api/my-profile', function () {
        return response()->json([
            'myProfile' => auth()->user()
        ]);
    });

    Route::post('/products/{product}/cart', [CardController::class, 'store'])->name('product.cart.store');
    Route::post('/addorder/{card}/card', [OrderController::class, 'store'])->name('order.store');

    // Route::get('/home', function () {
    //     return view('backend.index');
    // })->name('admin.home');

    Route::prefix('admin')->group(function () {
        Route::get('/', [Backend::class, 'home'])->name('admin.home');

        Route::post('/products/{product}/comments', [CommentController::class, 'store'])->name('products.comments.store');

        // Route::prefix('product')->group(function () {
        //     Route::get('/', [Product::class, 'index'])->name('admin.productlist');
        //     Route::get('/add', [Product::class, 'create'])->name('admin.productadd');
        //     Route::post('/store', [Product::class, 'store'])->name('admin.product.store');
        //     Route::get('/edit/{id}', [Product::class, 'edit'])->where('id', '[0-9]+')->name('admin.productedit');
        //     Route::patch('/update/{id}', [Product::class, 'update'])->name('admin.product.update');
        //     Route::get('/show/{id}', [Product::class, 'show'])->where('id', '[0-9]+')->name('admin.productshow');
        //     Route::get('/destroy/{id}', [Product::class, 'destroy'])->where('id', '[0-9]+')->name('admin.productdelete');
        // });

        Route::resource('product', Product::class);
        Route::get('/product-trash', [Product::class, 'trash'])->name('product.trash');
        Route::get('/product-pdf', [Product::class, 'downloadPdf'])->name('product.pdf');
        Route::patch('/restore/{product}', [Product::class, 'restore'])->where('id', '[0-9]+')->name('product.restore');
        Route::delete('/delete/{id}', [Product::class, 'delete'])->where('id', '[0-9]+')->name('product.delete');

        // Route::prefix('product')->group(function () {

        //     Route::get('/', [Product::class, 'index'])->name('product.index');
        //     Route::get('/add', [Product::class, 'create'])->name('product.create');
        //     Route::post('/store', [Product::class, 'store'])->name('product.store');
        //     Route::get('/edit/{id}', [Product::class, 'edit'])->where('id', '[0-9]+')->name('product.edit');
        //     Route::patch('/update/{id}', [Product::class, 'update'])->name('product.update');
        //     Route::get('/show/{id}', [Product::class, 'show'])->where('id', '[0-9]+')->name('product.show');
        //     Route::get('/destroy/{id}', [Product::class, 'destroy'])->where('id', '[0-9]+')->name('product.delete');
        // });


        Route::get('/category-trash', [Category::class, 'trash'])->name('category.trash');
        Route::get('/category-pdf', [Category::class, 'downloadPdf'])->name('pdf');
        Route::patch('/restore/{category}', [Category::class, 'restore'])->where('id', '[0-9]+')->name('category.restore');
        Route::delete('/delete/{category}', [Category::class, 'delete'])->where('id', '[0-9]+')->name('category.delete');
        Route::resource('category', Category::class);
        // Route::prefix('category')->group(function () {
        //     Route::get('/', [Category::class, 'index'])->name('category.index');
        //     Route::get('/add', [Category::class, 'create'])->name('category.create');
        //     Route::post('/store', [Category::class, 'store'])->name('category.store');
        //     Route::get('/edit/{id}', [Category::class, 'edit'])->where('id', '[0-9]+')->name('category.edit');
        //     Route::patch('/update/{id}', [Category::class, 'update'])->where('id', '[0-9]+')->name('category.update');
        //     Route::get('/show/{id}', [Category::class, 'show'])->where('id', '[0-9]+')->name('category.show');
        //     Route::delete('/delete/{id}', [Category::class, 'destroy'])->name('category.destroy');
        // });

        Route::prefix('colors')->name('colors.')->group(function () {



            Route::get('/Colors-trash', [Color::class, 'trash'])->name('trash');
            Route::patch('/Colors-trash/{id}/restore', [Color::class, 'restore'])->name('restore');
            Route::delete('/Colors-trash/{id}/delete', [Color::class, 'delete'])->name('delete');

            Route::get('/pdf', [Color::class, 'downloadPdf'])->name('pdf');
            Route::get('/export', [Color::class, 'exportXl'])->name('export');
        });
        Route::resource('color', Color::class);



        Route::prefix('carousels')->name('carousels.')->group(function () {

            Route::get('carousels-trash', [CarouselController::class, 'trash'])->name('trash');
            Route::patch('carousels-trash/{id}', [CarouselController::class, 'restore'])->name('restore');
            Route::delete('carousels-trash/{id}', [CarouselController::class, 'delete'])->name('delete');


            Route::get('/pdf', [CarouselController::class, 'downloadPdf'])->name('pdf');
            Route::get('/export', [CarouselController::class, 'exportXl'])->name('export');
        });
        Route::resource('carousels', CarouselController::class);


        Route::prefix('brand')->name('brand.')->group(function () {



            Route::get('/brand-trash', [Brand::class, 'trash'])->name('trash');
            Route::patch('/brand-trash/{id}/restore', [Brand::class, 'restore'])->name('restore');
            Route::delete('/brand-trash/{id}/delete', [Brand::class, 'delete'])->name('delete');

            Route::get('/pdf', [Brand::class, 'downloadPdf'])->name('pdf');
            Route::get('/export', [Brand::class, 'exportXl'])->name('export');
        });



        Route::resource('brand', Brand::class);


        Route::prefix('sizes')->name('sizes.')->group(function () {
            Route::get('/sizes-trash', [Size::class, 'trash'])->name('trash');
            Route::patch('/sizes-trash/{id}/restore', [Size::class, 'restore'])->name('.restore');
            Route::delete('/sizes-trash/{id}/delete', [Size::class, 'delete'])->name('delete');

            Route::get('/pdf', [Size::class, 'downloadPdf'])->name('pdf');
            Route::get('/export', [Size::class, 'exportXl'])->name('export');
        });

        Route::resource('sizes', Size::class);

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [User::class, 'index'])->name('index');
            Route::get('/{user}', [User::class, 'show'])->name('show');
            //Route::get('/{user}/change-role', [User::class, 'show'])->name('show');
            Route::get('/{user}/change-role', [User::class, 'changeRole'])->name('change_role');
            Route::patch('/{user}/Update-role', [User::class, 'updateRole'])->name('update_role');
        });


        Route::prefix('comment')->group(function () {
            Route::get('/', [BackendComment::class, 'commentlist'])->name('admin.commentlist');
            Route::get('/delete/{id}', [BackendComment::class, 'commenttdelete'])->name('admin.commenttdelete');
        });
    });
});
Route::fallback(function () {
    dd('paglami bondo koro 😠..... ');
});
