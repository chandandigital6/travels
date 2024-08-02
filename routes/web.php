<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BannerController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookClientController;
use App\Http\Controllers\BookTabaleController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PlanCOntroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\ResortStateController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceBeforController;
use App\Http\Controllers\ServiceChooseController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceGalleryController;
use App\Http\Controllers\ServiceHeaderController;
use App\Http\Controllers\ServiceTitleController;
use App\Http\Controllers\ServiceVideoController;
use App\Http\Controllers\StateContentControler;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StateVideosController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use App\Http\Requests\StateContentRequest;
use App\Models\Blog;
use App\Models\Seo;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogdetails/{blog}', [HomeController::class, 'blogdetails'])->name('blogdetails');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/destination', [HomeController::class, 'destination'])->name('destination');
Route::get('/destinationDetails/{title}', [HomeController::class, 'show'])->name('destination-details');
Route::get('/tour', [HomeController::class, 'tour'])->name('tour');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/guides', [HomeController::class, 'guides'])->name('guides');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/domestic', [HomeController::class, 'national'])->name('domestic');
Route::get('/international', [HomeController::class, 'international'])->name('international');
Route::get('/thankYou', [HomeController::class, 'thanks'])->name('thanks');
Route::get('/page404', [HomeController::class, 'page404'])->name('page404');
Route::get('/login', [HomeController::class, 'login'])->name('login'); // Login form route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); // Registration form route
Route::post('/register', [RegisterController::class, 'register'])->name('register.post'); // Registration form submission route
Route::post('/login', [LoginController::class, 'loginUser'])->name('login.post'); // Login form submission route
Route::get('/myprofile', [HomeController::class, 'myprofile'])->name('myprofile'); // User profile route
Route::get('/inbox', [HomeController::class, 'inbox'])->name('inbox');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/accountsetting', [HomeController::class, 'accountsetting'])->name('accountsetting');

Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Display login form
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


// Country Start

Route::get('/india', [HomeController::class, 'india'])->name('india');
Route::get('/london', [HomeController::class, 'london'])->name('london');
Route::get('/italy', [HomeController::class, 'italy'])->name('italy');
Route::get('/singapore', [HomeController::class, 'singapore'])->name('singapore');
Route::get('/singapore', [HomeController::class, 'singapore'])->name('singapore');
Route::get('/vietnam', [HomeController::class, 'vietnam'])->name('vietnam');
Route::get('/turkey', [HomeController::class, 'turkey'])->name('turkey');
Route::get('/thailand', [HomeController::class, 'thailand'])->name('thailand');



//India City Start

Route::get('/kashmir', [HomeController::class, 'kashmir'])->name('kashmir');
Route::get('/rajasthan', [HomeController::class, 'rajasthan'])->name('rajasthan');


// Footer Links

Route::get('/legalnotice', [HomeController::class, 'legalnotice'])->name('legalnotice');
Route::get('/privacypolicy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/cookiepolicy', [HomeController::class, 'cookiepolicy'])->name('cookiepolicy');
Route::get('/termsconditon', [HomeController::class, 'termsconditon'])->name('termsconditon');



Route::get('/login', [HomeController::class, 'login'])->name('login'); // Login form route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); // Registration form route
Route::post('/register', [RegisterController::class, 'register'])->name('register.post'); // Registration form submission route
Route::post('/login/post', [LoginController::class, 'loginUser'])->name('login.post'); // Login form submission route
Route::get('/myprofile', [HomeController::class, 'myprofile'])->name('myprofile'); // User profile route
Route::get('/inbox', [HomeController::class, 'inbox'])->name('inbox');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/accountsetting', [HomeController::class, 'accountsetting'])->name('accountsetting');

Route::post('profile/update', [\App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('profile.update');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Display login form
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




// web.php (or routes file)
//Route::get('/destination/{slug}', [HomeController::class, 'showDestination'])->name('destination');

//Route::get('/destination/{state}/{destination}', [HomeController::class, 'showDestinationDetails'])->name('destination.details');






Route::get('login-form',[AuthController::class,'index'])->name('login-form');
Route::get('/avvacation/registration',[AuthController::class,'registration'])->name('registration');
//Route::post('store', [AuthController::class, 'store'])->name('auth.store');
Route::post('auth-store', [AuthController::class, 'store'])->name('auth-store');
Route::post('login',[AuthController::class,'login'])->name('auth.login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('forget',[AuthController::class,'forget'])->name('auth.forget');
Route::post('forget',[AuthController::class,'forget_pass'])->name('auth.forget_pass');
Route::get('reset-password',[AuthController::class,'reset_password'])->name('reset-password');
Route::post('store-password',[AuthController::class,'store_password'])->name('store-password');

// routes/web.php

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('auth.change-password-form');
Route::post('/update-password', [AuthController::class, 'updatePassword'])->name('auth.update-password');

Route::post('bookTable/store',[BookTabaleController::class,'store'])->name('bookTable.store');
Route::post('bookClient/store',[BookClientController::class,'store'])->name('bookClient.store');
Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');

Route::post('appointment/store',[AppointmentController::class,'store'])->name('appointment.store');
Route::post('appointment/image',[AppointmentController::class,'image'])->name('appointment.image');

Route::get('/{title}',[ServiceController::class,'show'])->name('service.show');

Route::get('run/dashboard', [AuthController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('auth.dashboard');

Route::group(['middleware' => ['auth']],function (){
    Route::get('banner/index',[BannerController::class,'index'])->name('banner.index');
    Route::get('banner/create',[BannerController::class,'create'])->name('banner.create');
    Route::post('banner/store',[BannerController::class,'store'])->name('banner.store');
    Route::get('banner/edit/{banner}',[BannerController::class,'edit'])->name('banner.edit');
    Route::get('banner/delete/{banner}',[BannerController::class,'delete'])->name('banner.delete');
    Route::get('banner/duplicate/{banner}',[BannerController::class,'duplicate'])->name('banner.duplicate');
    Route::post('banner/update/{banner}',[BannerController::class,'update'])->name('banner.update');

      //  about

    Route::get('about/index',[AboutController::class,'index'])->name('about.index');
    Route::get('about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('about/edit/{about}',[AboutController::class,'edit'])->name('about.edit');
    Route::get('about/delete/{about}',[AboutController::class,'delete'])->name('about.delete');
    Route::get('about/duplicate/{about}',[AboutController::class,'duplicate'])->name('about.duplicate');
    Route::post('about/update/{about}',[AboutController::class,'update'])->name('about.update');

    // Appointment

    Route::get('appointment/index',[AppointmentController::class,'index'])->name('appointment.index');
    Route::get('appointment/create',[AppointmentController::class,'create'])->name('appointment.create');
    Route::get('appointment/edit/{appointment}',[AppointmentController::class,'edit'])->name('appointment.edit');
    Route::post('appointment/update/{appointment}',[AppointmentController::class,'update'])->name('appointment.update');
    Route::get('appointment/delete/{appointment}',[AppointmentController::class,'delete'])->name('appointment.delete');
    Route::get('appointment/duplicate/{appointment}',[AppointmentController::class,'duplicate'])->name('appointment.duplicate');

    //book


    Route::get('bookTable/index',[BookTabaleController::class,'index'])->name('bookTable.index');
    Route::get('bookTable/create',[BookTabaleController::class,'create'])->name('bookTable.create');
    Route::get('bookTable/edit/{bookTable}',[BookTabaleController::class,'edit'])->name('bookTable.edit');
    Route::post('bookTable/update/{bookTable}',[BookTabaleController::class,'update'])->name('bookTable.update');
    Route::get('bookTable/delete/{bookTable}',[BookTabaleController::class,'delete'])->name('bookTable.delete');
    Route::get('bookTable/duplicate/{bookTable}',[BookTabaleController::class,'duplicate'])->name('bookTable.duplicate');


    //book


    Route::get('bookClient/index',[BookClientController::class,'index'])->name('bookClient.index');
    Route::get('bookClient/create',[BookClientController::class,'create'])->name('bookClient.create');
    Route::get('bookClient/edit/{bookClient}',[BookClientController::class,'edit'])->name('bookClient.edit');
    Route::post('bookClient/update/{bookClient}',[BookClientController::class,'update'])->name('bookClient.update');
    Route::get('bookClient/delete/{bookClient}',[BookClientController::class,'delete'])->name('bookClient.delete');
    Route::get('bookClient/duplicate/{bookClient}',[BookClientController::class,'duplicate'])->name('bookClient.duplicate');


    Route::get('contact/index',[ContactController::class,'index'])->name('contact.index');
    Route::get('contact/create',[ContactController::class,'create'])->name('contact.create');
    Route::get('contact/edit/{contact}',[ContactController::class,'edit'])->name('contact.edit');
    Route::post('contact/update/{contact}',[ContactController::class,'update'])->name('contact.update');
    Route::get('contact/delete/{contact}',[ContactController::class,'delete'])->name('contact.delete');
    Route::get('contact/duplicate/{contact}',[ContactController::class,'duplicate'])->name('contact.duplicate');

    //services

    Route::get('service/index',[ServiceController::class,'index'])->name('service.index');
    Route::get('service/create',[ServiceController::class,'create'])->name('service.create');
    Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
    Route::get('service/edit/{service}',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('service/update/{service}',[ServiceController::class,'update'])->name('service.update');
    Route::get('service/delete/{service}',[ServiceController::class,'delete'])->name('service.delete');
    Route::get('service/duplicate/{service}',[ServiceController::class,'duplicate'])->name('service.duplicate');


    //servicesTitle

    Route::get('serviceTitle/index',[ServiceTitleController::class,'index'])->name('serviceTitle.index');
    Route::get('serviceTitle/create',[ServiceTitleController::class,'create'])->name('serviceTitle.create');
    Route::post('serviceTitle/store',[ServiceTitleController::class,'store'])->name('serviceTitle.store');
    Route::get('serviceTitle/edit/{serviceTitle}',[ServiceTitleController::class,'edit'])->name('serviceTitle.edit');
    Route::post('serviceTitle/update/{serviceTitle}',[ServiceTitleController::class,'update'])->name('serviceTitle.update');
    Route::get('serviceTitle/delete/{serviceTitle}',[ServiceTitleController::class,'delete'])->name('serviceTitle.delete');
    Route::get('serviceTitle/duplicate/{serviceTitle}',[ServiceTitleController::class,'duplicate'])->name('serviceTitle.duplicate');




    //testimonial

    Route::get('testimonial/index',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('testimonial/edit/{testimonial}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('testimonial/update/{testimonial}',[TestimonialController::class,'update'])->name('testimonial.update');
    Route::get('testimonial/delete/{testimonial}',[TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::get('testimonial/duplicate/{testimonial}',[TestimonialController::class,'duplicate'])->name('testimonial.duplicate');


    // teams

    Route::get('team/index',[TeamController::class,'index'])->name('team.index');
    Route::get('team/create',[TeamController::class,'create'])->name('team.create');
    Route::post('team/store',[TeamController::class,'store'])->name('team.store');
    Route::get('team/edit/{team}',[TeamController::class,'edit'])->name('team.edit');
    Route::post('team/update/{team}',[TeamController::class,'update'])->name('team.update');
    Route::get('team/delete/{team}',[TeamController::class,'delete'])->name('team.delete');
    Route::get('team/duplicate/{team}',[TeamController::class,'duplicate'])->name('team.duplicate');

//    // enquiry
//    Route::prefix('blog')->name('blog.')->group(function(){
//        Route::get('/',[BlogController::class,'index'])->name('index');
//        Route::get('create/',[BlogController::class,'create'])->name('create');
//        Route::post('store',[BlogController::class,'store'])->name('store');
//        Route::get('edit/{blog}',[BlogController::class,'edit'])->name('edit');
//        Route::post('update/{blog}',[BlogController::class,'update'])->name('update');
//        Route::get('delete/{blog}',[BlogController::class,'delete'])->name('delete');
//        Route::get('duplicate/{blog}',[BlogController::class,'duplicate'])->name('duplicate');
//    });


    // blog

    Route::get('blogs/index',[BlogController::class,'index'])->name('blogs.index');
    Route::get('blogs/create',[BlogController::class,'create'])->name('blogs.create');
    Route::post('blogs/store',[BlogController::class,'store'])->name('blogs.store');
    Route::get('blogs/edit/{blog}',[BlogController::class,'edit'])->name('blogs.edit');
    Route::post('blogs/update/{blog}',[BlogController::class,'update'])->name('blogs.update');
    Route::get('blogs/delete/{blog}',[BlogController::class,'delete'])->name('blogs.delete');
    Route::get('blogs/duplicate/{blog}',[BlogController::class,'duplicate'])->name('blogs.duplicate');

    //counter

    Route::get('counter/index',[CounterController::class,'index'])->name('counter.index');
    Route::get('counter/create',[CounterController::class,'create'])->name('counter.create');
    Route::post('counter/store',[CounterController::class,'store'])->name('counter.store');
    Route::get('counter/edit/{counter}',[CounterController::class,'edit'])->name('counter.edit');
    Route::post('counter/update/{counter}',[CounterController::class,'update'])->name('counter.update');
    Route::get('counter/delete/{counter}',[CounterController::class,'delete'])->name('counter.delete');
    Route::get('counter/duplicate/{counter}',[CounterController::class,'duplicate'])->name('counter.duplicate');


    //

    //destination

    Route::get('destination/index',[DestinationController::class,'index'])->name('destination.index');
    Route::get('destination/create',[DestinationController::class,'create'])->name('destination.create');
    Route::post('destination/store',[DestinationController::class,'store'])->name('destination.store');
    Route::get('destination/edit/{destination}',[DestinationController::class,'edit'])->name('destination.edit');
    Route::post('destination/update/{destination}',[DestinationController::class,'update'])->name('destination.update');
    Route::get('destination/delete/{destination}',[DestinationController::class,'delete'])->name('destination.delete');
    Route::get('destination/duplicate/{destination}',[DestinationController::class,'duplicate'])->name('destination.duplicate');



    //destination

    Route::get('resort/index',[ResortController::class,'index'])->name('resort.index');
    Route::get('resort/create',[ResortController::class,'create'])->name('resort.create');
    Route::post('resort/store',[ResortController::class,'store'])->name('resort.store');
    Route::get('resort/edit/{resort}',[ResortController::class,'edit'])->name('resort.edit');
    Route::post('resort/update/{resort}',[ResortController::class,'update'])->name('resort.update');
    Route::get('resort/delete/{resort}',[ResortController::class,'delete'])->name('resort.delete');
    Route::get('resort/duplicate/{resort}',[ResortController::class,'duplicate'])->name('resort.duplicate');


    Route::get('resortState/index',[ResortStateController::class,'index'])->name('resortState.index');
    Route::get('resortState/create',[ResortStateController::class,'create'])->name('resortState.create');
    Route::post('resortState/store',[ResortStateController::class,'store'])->name('resortState.store');
    Route::get('resortState/edit/{resortState}',[ResortStateController::class,'edit'])->name('resortState.edit');
    Route::post('resortState/update/{resortState}',[ResortStateController::class,'update'])->name('resortState.update');
    Route::get('resortState/delete/{resortState}',[ResortStateController::class,'delete'])->name('resortState.delete');
    Route::get('resortState/duplicate/{resortState}',[ResortStateController::class,'duplicate'])->name('resortState.duplicate');

    //dstination

    Route::get('state/index',[StateController::class,'index'])->name('state.index');
    Route::get('state/create',[StateController::class,'create'])->name('state.create');
    Route::post('state/store',[StateController::class,'store'])->name('state.store');
    Route::get('state/edit/{state}',[StateController::class,'edit'])->name('state.edit');
    Route::post('state/update/{state}',[StateController::class,'update'])->name('state.update');
    Route::get('state/delete/{state}',[StateController::class,'delete'])->name('state.delete');
    Route::get('state/duplicate/{state}',[StateController::class,'duplicate'])->name('state.duplicate');

    // logo

    Route::get('logo/index',[ClientController::class,'index'])->name('logo.index');
    Route::get('logo/create',[ClientController::class,'create'])->name('logo.create');
    Route::post('logo/store',[ClientController::class,'store'])->name('logo.store');
    Route::get('logo/edit/{logo}',[ClientController::class,'edit'])->name('logo.edit');
    Route::post('logo/update/{logo}',[ClientController::class,'update'])->name('logo.update');
    Route::get('logo/delete/{logo}',[ClientController::class,'delete'])->name('logo.delete');
    Route::get('logo/duplicate/{logo}',[ClientController::class,'duplicate'])->name('logo.duplicate');
    Route::delete('/remove-image', [ClientController::class, 'removeImage'])->name('remove.image');


// serviceGallery


    Route::get('gallery/index',[ServiceGallryController::class,'index'])->name('gallery.index');
    Route::get('gallery/create',[ServiceGalleryController::class,'create'])->name('gallery.create');
    Route::post('gallery/store',[ServiceGalleryController::class,'store'])->name('gallery.store');
    Route::get('gallery/edit/{gallery}',[ServiceGalleryController::class,'edit'])->name('gallery.edit');
    Route::post('gallery/update/{gallery}',[ServiceGalleryController::class,'update'])->name('gallery.update');
    Route::get('gallery/delete/{gallery}',[ServiceGalleryController::class,'delete'])->name('gallery.delete');
    Route::get('gallery/duplicate/{gallery}',[ServiceGalleryController::class,'duplicate'])->name('gallery.duplicate');






    //seo


    Route::get('seo/index',[SeoController::class,'index'])->name('seo.index');
    Route::get('seo/create',[SeoController::class,'create'])->name('seo.create');
    Route::post('seo/store',[SeoController::class,'store'])->name('seo.store');
    Route::get('seo/edit/{seo}',[SeoController::class,'edit'])->name('seo.edit');
    Route::post('seo/update/{seo}',[SeoController::class,'update'])->name('seo.update');
    Route::get('seo/delete/{seo}',[SeoController::class,'delete'])->name('seo.delete');
    Route::get('seo/duplicate/{seo}',[SeoController::class,'duplicate'])->name('seo.duplicate');


    //seo


    Route::get('packages/index',[PackageController::class,'index'])->name('packages.index');
    Route::get('packages/create',[PackageController::class,'create'])->name('packages.create');
    Route::post('packages/store',[PackageController::class,'store'])->name('packages.store');
    Route::get('packages/edit/{packages}',[PackageController::class,'edit'])->name('packages.edit');
    Route::post('packages/update/{packages}',[PackageController::class,'update'])->name('packages.update');
    Route::get('packages/delete/{packages}',[PackageController::class,'delete'])->name('packages.delete');
    Route::get('packages/duplicate/{packages}',[PackageController::class,'duplicate'])->name('packages.duplicate');


    //content

    Route::get('stateContent/index',[StateContentControler::class,'index'])->name('stateContent.index');
    Route::get('stateContent/create',[StateContentControler::class,'create'])->name('stateContent.create');
    Route::post('stateContent/store',[StateContentControler::class,'store'])->name('stateContent.store');
    Route::get('stateContent/edit/{stateContent}',[StateContentControler::class,'edit'])->name('stateContent.edit');
    Route::post('stateContent/update/{stateContent}',[StateContentControler::class,'update'])->name('stateContent.update');
    Route::get('stateContent/delete/{stateContent}',[StateContentControler::class,'delete'])->name('stateContent.delete');
    Route::get('stateContent/duplicate/{stateContent}',[StateContentControler::class,'duplicate'])->name('stateContent.duplicate');



    Route::get('stateVideo/index',[StateVideosController::class,'index'])->name('stateVideo.index');
    Route::get('stateVideo/create',[StateVideosController::class,'create'])->name('stateVideo.create');
    Route::post('stateVideo/store',[StateVideosController::class,'store'])->name('stateVideo.store');
    Route::get('stateVideo/edit/{stateVideo}',[StateVideosController::class,'edit'])->name('stateVideo.edit');
    Route::post('stateVideo/update/{stateVideo}',[StateVideosController::class,'update'])->name('stateVideo.update');
    Route::get('stateVideo/delete/{stateVideo}',[StateVideosController::class,'delete'])->name('stateVideo.delete');
    Route::get('stateVideo/duplicate/{stateVideo}',[StateVideosController::class,'duplicate'])->name('stateVideo.duplicate');


    Route::get('video/index',[VideoController::class,'index'])->name('video.index');
    Route::get('video/create',[VideoController::class,'create'])->name('video.create');
    Route::post('video/store',[VideoController::class,'store'])->name('video.store');
    Route::get('video/edit/{video}',[VideoController::class,'edit'])->name('video.edit');
    Route::post('video/update/{video}',[VideoController::class,'update'])->name('video.update');
    Route::get('video/delete/{video}',[VideoController::class,'delete'])->name('video.delete');
    Route::get('video/duplicate/{video}',[VideoController::class,'duplicate'])->name('video.duplicate');
});





Route::get('run/foo', function () {
    $exitCode = Artisan::call('storage:link');
    if ($exitCode === 0) {
        return 'Success';
    } else {
        return 'Failed'; // You can customize this message as needed
    }
});

Route::get('run/migrate', function () {
    $exitCode = Artisan::call('migrate:fresh', ['--seed' => true]);
    if ($exitCode === 0) {
        return 'Migration successful';
    } else {
        return 'Migration failed'; // You can customize this message as needed

    }
});

Route::get('run/onlyMigrate', function () {
    $exitCode = Artisan::call('migrate');
    if ($exitCode === 0) {
        return 'Migration successful';
    } else {
        return 'Migration failed'; // You can customize this message as needed

    }
});




