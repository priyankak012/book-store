<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminmanageController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookManagerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DatamanageController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ForgetpasswordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderdetailController;
use App\Http\Controllers\OrdermanagmentController;
use App\Http\Controllers\paginationcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SecrchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\billing;
use App\Models\Book;
use App\Models\Checkout;




Route::get('/home', function () {
    return view('home');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

/* Registration controller used for user registration,ligin */

Route::post('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/registration', [RegistrationController::class, 'index'])->name('storedata');
Route::get('/registration', function () {
    return view('registration');
    Route::get('/index', function () {
        return view('index')->name('index');
    });
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/detail', function () {
    return view('detail');
});

/* BookContoller used for booksystem*/

Route::post('/bookdetail', [BookController::class, 'create'])->name('bookstore');
Route::get('/index', [BookController::class, 'show'])->name('index');
Route::post('/cart', [BookController::class, 'addcart'])->name('addtocart');
Route::post('/cartlist', [BookController::class, 'addtocart'])->name('cartlist');
Route::get('/cartlist', function () {
    return view('cartlist')->name('addlist');
});
Route::get('/book', function () {
    return view('book');
});
Route::get('/bookdetail', function () {
    return view('bookdetail');
})->name('bookstore');

/* CartController used for cartsystem */

Route::get('/cartlist', [CartController::class, 'cartlist']);
Route::get('/cartlist/{id}', [CartController::class, 'removecart'])->name('removeid');
Route::post('/cartlist/{id}', [CartController::class, 'removecart'])->name('removeid');
Route::get('/order', [CartController::class, 'ordernow']);
Route::post('/order', [CartController::class, 'ordernow']);
Route::post('/orderplace', [CartController::class, 'orderplace']);

Route::get('/cart', function () {
    return view('cart');
});

/* ForgetpasswordCOntroller use for user authentication forgetpasword system*/

Route::get('/resetpassword/{token}', [ForgetpasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/resetpassword', [ForgetpasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('forget-password', [ForgetpasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgetpasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('mail', function () {
    return view('mails.testmail');
});
Route::get('resetpassword', function () {
    return view('emails.resetpassword');
});
// Route::get('resetpassword', function () {
//     $recipientEmail = 'priyabpccs@gmail.com';
//     $details = [

//         'subject' => 'Reset password',
//         'message' => 'change toy password ',
//     ];
//     Mail::to($recipientEmail)->send(new SendMail($details));

//     dd("Email is Sent.");
// });
// Route::get('send-email', function () {
//     return view('forgetpassword');
// });
Route::get('imagedetail ', function () {
    return view('imagedetail');
});


/* use Book Manager controller for use in Admin panel*/

Route::get('crud.index', [BookManagerController::class, 'show'])->name('crud.index');
Route::get("/search", [BookManagerController::class, 'search'])->name('search');
Route::get('imagedetail/{id}', [BookManagerController::class, 'details'])->name('imagedetail');
Route::get('crud.view/{id}', [BookManagerController::class, 'view'])->name('crud.view');
Route::put('crud.update/{id}', [BookManagerController::class, 'update'])->name('crud_updates');
Route::get('crud.edit/{id}', [BookManagerController::class, 'edit'])->name('crud_edit');
Route::get('books/{id}', [BookManagerController::class, 'destroy'])->name('crud_delete');
Route::get('crud.exam', [BookManagerController::class, 'show'])->name('show_data');
Route::get('crud.update/{id}', [BookManagerController::class, 'update'])->name('update_get');
// Route::get('crud.index',[BookManagerController::class,'data_count']);

Route::get('delete', function () {
    return view('crud.delete');
});

Route::get('exam', function () {
    return view('crud.exam');
});

/* Use ProfileControlller for use in User profile*/

Route::get('profile', [ProfileController::class, 'create'])->name('profile');
Route::get('profile', [ProfileController::class, 'show'])->name('profile');
Route::post('profile', [ProfileController::class, 'create'])->name('profile');
Route::get('profile_show', [ProfileController::class, 'show']);
Route::get('profile', function () {
    return view('crud.profileform');
});
Route::get('registration_show', function () {
    return view('crud.registration_show');
});
Route::get('cart_show', function () {
    return view('crud.cart_show');
});

/* DatamangerController use to all table use Crud in database */

Route::get('registration_show', [DatamanageController::class, 'registration_show']);
Route::get('detail_show', [DatamanageController::class, 'detail_show']);
Route::get('book_show', [DatamanageController::class, 'book_show']);
Route::get('cart_show', [DatamanageController::class, 'cart_show']);
Route::get('checkout_show', [DatamanageController::class, 'checkout_show']);

/*  use  adminmanagecontroller for crud all table */
Route::get('reg_view/{id}', [AdminmanageController::class, 'edit'])->name('reg_view');
Route::get('cart_view/{id}', [AdminmanageController::class, 'cart_view'])->name('cart_view');
Route::get('detail_view/{id}', [AdminmanageController::class, 'detail_view'])->name('detail_view');
Route::get('reg_delete/{id}', [AdminmanageController::class, 'destroy'])->name('reg_delete');
Route::get('cart_delete/{id}', [AdminmanageController::class, 'cart_delete'])->name('cart_delete');
Route::get('detail_delete/{id}', [AdminmanageController::class, 'detail_delete'])->name('detail_delete');
Route::get('checkout_view/{id}', [AdminmanageController::class, 'checkout_view'])->name('checkout_view');
Route::get('checkout_delete/{id}', [AdminmanageController::class, 'checkout_delete'])->name('checkout_delete');


/* display data OrderDetail  */

// Route::get('checkout', function () {
//     return view('checkout');
// });
Route::post('checkout', [OrdermanagmentController::class, 'checkout_create'])->name('checkout_post');
Route::get('checkout', [OrdermanagmentController::class, 'store']);
Route::get('database-data', [OrderController::class, 'index']);
Route::get('crud.imagedetail/{id}', [AdminmanageController::class, 'image_details'])->name('crud.imagedetail');
Route::get('checkout',function()
{
    return view('checkout');
})->name('checkout');

/* use SeahcController for search display data */
Route::get('book_show', [SearchController::class, 'book_search']);
Route::get('registration_show', [SearchController::class, 'registration_search']);
Route::get('detail_show', [SearchController::class, 'detail_search']);
Route::get('checkout_show', [SearchController::class, 'checkout_search']);
Route::get('profile_search', [SearchController::class, 'profile_search']);



/* use paginationcontroller for paginationall data */

Route::get('book_show', [paginationcontroller::class, 'book_pagination']);
Route::get('/convert-to-json', function () {
    return view('crud.book_show');
});
Route::get('crud.index', [paginationcontroller::class, 'index_pagination']);
Route::get('/convert-to-json', function () {
    return view('crud.index');
});
// Route::get('detail_show',[paginationcontroller::class,'detail_pagination']);
// Route::get('/convert-to-json',function()
// {
//     return view('crud.detail_show');
// });

Route::get('profile_show', [paginationcontroller::class, 'profile_pagination']);
Route::get('/convert-to-json', function () {
    return view('crud.profile_show');
});

Route::get('registration_show', [paginationcontroller::class, 'registration_pagination']);
Route::get('/convert-to-json', function () {
    return view('crud.registration_show');
});

// Route::get('cart_show',[paginationcontroller::class,'cart_pagination']);
// Route::get('/convert-to-json',function()
// {
//     return view('crud.cart_show');
// });

Route::get('checkout_show', [paginationcontroller::class, 'chekout_pagination']);
Route::get('/convert-to-json', function () {
    return view('crud.checkout_show');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/adminlogin', [AdminController::class, 'getLogin'])->name('adminLogin');
    Route::post('/adminlogin', [AdminController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('crud.index');
        })->name('adminDashboard');
    });
});
Route::get('admin.login', function () {
    return view('admin.loginauth');
});
Route::get('succcessfully', function () {
    return view('Success');
});
Route::get('crud_bookdetail', function () {
    return view('crud.bookdetail');
});
Route::get('userdetail', function () {
    return view('userdetail');
});
Route::get('exm', function () {
    return view('crud.exm');
});
Route::get('crud.index', [BookManagerController::class, 'data_count']);
// Route::get('book_show',[FilterController::class,'book_filter']);
Route::get(' crud.bookdetail', function () {
    return view('crud.bookdetail');
});

Route::get('crud.profiledetail', function () {
    return view('admin_manage.profile');
});
Route::get('crud.profiledetail', function () {
    return view('admin_manage.profile');
});

Route::get('profile_view/{id}', [AdminmanageController::class, 'profile_view'])->name('admin.profile');
Route::get('checkoutdetail', function () {
    return view('checkoutdetail');
});
Route::get('checkoutdetail', [AdminmanageController::class, 'checkoutdetail']);



Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/admin.login', [AdminAuthController::class, 'getlogin'])->name('adminLogin');
    Route::post('/admin.login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('adminDashboard');
    });
});
Route::get('adminauthlogin', function () {
    return view('admin.loginauth');
});
Route::get('admin.login', function () {
    return view('admin.adminlogin');
});
Route::get('checkoutdetail/{id}', [OrdermanagmentController::class, 'datashow']);

Route::get('success',function()
{
    return view('Success');
});

Route::get('send-email',[EmailController::class,'mailsend']);
