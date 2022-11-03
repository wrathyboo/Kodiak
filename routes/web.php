<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GameController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
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

route::get('/',[HomeController::class, 'goToAdmin'], function(){
});

Route::group(['prefix' => 'home'], function(){
    
    Route::get('/', function () {
        $_Auth = Auth::user();
        return view('home',compact('_Auth'));
    })->name('home');

    //account 
    Route::get('login', function () {
        $_Auth = Auth::user();
        return view('user.login',compact('_Auth'));
    })->name('user.login');
    Route::post('login', [AccountController::class, 'login' ], function () {
    });
    Route::get('register', function () {
        $_Auth = Auth::user();
        return view('user.register',compact('_Auth'));
    })->name('user.register');
    Route::post('register', [AccountController::class, 'create'], function(){
    });
    Route::get('/logout', [AccountController::class, 'logout'], function(){
    })->name('user.logout');

    
});

route::group(['prefix' => 'profile'], function (){
    //profile
    Route::get('{id}', function () {
        $_Auth = Auth::user();
        $parts = explode(" ", $_Auth->name);
        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
        else
        {
            $firstname = $_Auth->name;
            $lastname = " ";
        }
        return view('user.profile',compact('_Auth','firstname','lastname'));
    })->name('user.profile');
    Route::post('{id}', [AccountController::class, 'update'], function () {
    });
});

route::group(['prefix' => 'discovery'], function (){
    Route::get('', function () {
        $_Auth = Auth::user();
        return view('discovery.gamestore',compact('_Auth'));
    })->name('browse');
    Route::get('app', function () {
        $_Auth = Auth::user();
        return view('discovery.game-details',compact('_Auth'));
    })->name('game.detail');
});

route::group(['prefix' => 'blog'], function (){
    Route::get('', function () {
        $_Auth = Auth::user();
        return view('news.blog',compact('_Auth'));
    })->name('blog');
    Route::get('content/id', function () {
        $_Auth = Auth::user();
        return view('news.blog-content',compact('_Auth'));
    })->name('blog.content');
});

route::group(['prefix' => 'about'], function (){
    Route::get('', function () {
        $_Auth = Auth::user();
        return view('about.about-us',compact('_Auth'));
    })->name('about');
    Route::get('contact', function () {
        $_Auth = Auth::user();
        return view('about.contact-us',compact('_Auth'));
    })->name('about.contact');
    Route::get('faq', function () {
        $_Auth = Auth::user();
        return view('about.faq',compact('_Auth'));
    })->name('about.faq');
    Route::get('privacy-and-policy', function () {
        $_Auth = Auth::user();
        return view('about.privacy-policy',compact('_Auth'));
    })->name('about.privacy-policy');
    Route::get('terms-and-conditions', function () {
        $_Auth = Auth::user();
        return view('about.terms-conditions',compact('_Auth'));
    })->name('about.terms-conditions');
});

Route::get('hot-sales', function () {
    $_Auth = Auth::user();
    return view('offers.hot-offers',compact('_Auth'));
})->name('offer');

//Admin 
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    // Gate::define('Admin', function ($user) {
    //     return $user->category == "admin";
    // });
   
    Route::get('user/{username}',  [AdminController::class, 'auth' ])->name('admin.index');
    Route::get('account-list', [AccountController::class, 'list' ], function () {
    })->name('account.list');
    Route::POST('account-list', [AccountController::class, 'list' ], function () {
    })->name('list.sort');
    Route::get('account-create', function () {
        $_Auth = Auth::user();
        return view('admin-pages.account-create',compact('_Auth'));
    })->name('admin.create');
    Route::POST('account-create', [AdminController::class, 'create' ], function () {
    });
    Route::get('product-add', function () {
        $_Auth = Auth::user();
        return view('admin-pages.add-game',compact('_Auth'));
    })->name('game.add');
    Route::POST('product-add', [GameController::class, 'store' ], function () {
    });
    Route::DELETE('app/{id}', [GameController::class, 'destroy' ], function () {
    })->name('game.destroy');
    Route::get('library', [GameController::class, 'list'], function () {
    })->name('game.library');
    Route::get('wishlist/{id}', [GameController::class, 'wishlist'], function () {
    })->name('game.wishlist');
});


//testing
Route::group(['prefix' => 'archive'], function(){
    Route::get('crop_img', function () {
        return view('testing.cropimage');
    });
    
    Route::post('crop_img', [ArchiveController::class, 'uploadCropImage' ])->name('forms.editor');
});

Route::put('/themes', function(Request $request) {
    $request->validate([
       'theme' => ['required', Rule::in(['darkly', 'cerulean'])]
    ]);
 
    session(['theme' => $request->theme]);
    return back();
 })->name('themes.update');

 Route::get('test', [ArchiveController::class, 'test' ])->name('test');