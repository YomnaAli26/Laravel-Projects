<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PodcastController;
use App\Http\Controllers\Admin\QuickController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\SleepController;
use App\Http\Controllers\Admin\SportController;
use App\Http\Controllers\Admin\StressController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\YogaController;
use App\Http\Controllers\Admin\EmotionController;
use App\Http\Controllers\Auth\DoctorLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Site\Doctor\ProfileController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\EditProfileController;
use App\Http\Controllers\Site\MessageController;
use App\Http\Controllers\Site\PrescriptionController;
use App\Http\Controllers\Site\SafeSpaceController;
use App\Http\Controllers\site\TherapistController;
use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use Laravel\Socialite\Facades\Socialite;

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


//Auth
Auth::routes();
Route::get('auth/google',[LoginController::class,'redirectToGoogle']);
Route::get('auth/google/callback',[LoginController::class,'handleGoogleCallback']);
Route::get('auth/facebook',[LoginController::class,'redirectToFacebook']);
Route::get('auth/facebook/callback',[LoginController::class,'handleFacebookCallback']);

//Site

Route::get('/', function () {
    return view('site.user-type');
});


/*User*/
Route::prefix("site")->middleware("auth")->group(function ()
{
/*Adult*/
    //home
    Route::get('home', [HomeController::class, 'index'])->name('home');
    //editing profile
    Route::get('profile/edit/{id}',[EditProfileController::class,'edit'])->name('edit-profile');
    Route::put('Edit-Profile/{id}',[EditProfileController::class,'update'])->name('update-profile');
    //prescription
    Route::get('Prescription',[PrescriptionController::class,'index'])->name('Prescription.index');
    //Articles
    Route::get('/articles',[\App\Http\Controllers\site\ArticleController::class,'index'])->name('article.index');
    Route::get('/articles/search',[\App\Http\Controllers\site\ArticleController::class,'search'])->name('article.search');
    Route::get('article/{id}',[\App\Http\Controllers\site\ArticleController::class,'show'])->name('article.show');
    //podcasts
    Route::get('/podcast',[\App\Http\Controllers\site\PodcastController::class,'index'])->name('podcast.index');
    Route::get('/podcast/{id}',[\App\Http\Controllers\site\PodcastController::class,'show'])->name('podcast.show');
    Route::get('/podlike/{id}',[\App\Http\Controllers\site\PodcastController::class,'like'])->name('pod.like');
    Route::get('/favourite',[\App\Http\Controllers\site\FavouriteController::class,'index'])->name('favourite.index');
    //therapists
    Route::get('therapist', [TherapistController::class,'index'])->name('therapist.index');
    Route::get('therapists/{id}',[TherapistController::class,'show'])->name('therapist.show');
    Route::post('therapist/review/{id}',[TherapistController::class,'review'])->name('therapist.review');
    Route::get('therapist/{therapist_id}',[TherapistController::class,'like'])->name('therapist.like');
    //yoga
    Route::get('yoga',[\App\Http\Controllers\Site\YogaController::class,'index'])->name('yoga');
    //my booking
    Route::get('/booking',[\App\Http\Controllers\Site\BookingController::class,'index'])->name('booking.index');
    //privacy
    Route::get('privacy', function () {
        return view('site.user.adult.privacy');
    })->name('privacy');
    //safe space
    Route::get('safe-space',[SafeSpaceController::class,'index'])->name('safe-space.index');
    Route::post('safe-space',[SafeSpaceController::class,'store'])->name('safe-space.store');
    //Appointment
    Route::post("appointment/{therapist_id}",[\App\Http\Controllers\Site\AppointmentController::class,'store'])->name('appointment.store');
//Rate
    Route::post("add-rate/{id}",[\App\Http\Controllers\Site\RateController::class,'store'])->name("rate.store");
/*child*/

    //article
    Route::get('child/articles',[\App\Http\Controllers\Site\Child\ArticleController::class,'index'])->name('child.article.index');
    Route::get('child/articles/{id}',[\App\Http\Controllers\Site\Child\ArticleController::class,'show'])->name('child.article.show');
    //podcast
    Route::get('child/podcasts',[\App\Http\Controllers\Site\Child\PodcastController::class,'index'])->name('child.podcast.index');
    //yoga
    Route::get('child/yoga',[\App\Http\Controllers\site\Child\YogaController::class,'index'])->name('child.yoga.index');
    Route::get('child/yoga/{id}',[\App\Http\Controllers\site\Child\YogaController::class,'show'])->name('child.yoga.show');
    //prescription
    Route::get('child/Prescription',[\App\Http\Controllers\Site\Child\PrescriptionController::class,'index'])->name('child.Prescription.index');


});

/*Doctor*/
Route::get("/doctor/create",[DoctorLoginController::class,'create'])->name("doctor.create");
Route::post("/doctor",[DoctorLoginController::class,'store'])->name("doctor.store");
Route::get('home', [HomeController::class, 'doctorHome'])->name('doctor.home');
Route::get('profile/{therapist_id}',[ProfileController::class,'show'])->name('profile.show');
Route::delete('post/{post}',[ProfileController::class,'destroy'])->name('post.destroy');
Route::post('doctor/post',[ProfileController::class,'store'])->name('profile.store');
Route::get('/doctor/booking',[\App\Http\Controllers\Site\BookingController::class,'show'])->name('booking.show');
Route::get('patients/prescriptions',[PrescriptionController::class,'show'])->name('prescription.show');
Route::post('addPrescription',[PrescriptionController::class,'store'])->name('prescription.store');


//chat
Route::get('chat',function (){
    return view('site.chat.chat');
});


/*Livewire Chat*/
Route::get('/users',CreateChat::class)->name('users');
Route::get('chat/{key?}',Main::class)->name('chat');
Route::get('/message/{id}', [MessageController::class,'getMessage'])->name('message');
Route::post('message', [MessageController::class,'sendMessage']);

//End Site



//Dashboard
/*Admin*/
Route::prefix('admin')->middleware(Middleware\AdminMiddleware::class)->group(function (){
    Route::get('/dashboard',[DashboardController::class,'index'])->name("dashboard");
    //Users group
    Route::get('/users',[UserController::class,'users'])->name('users.index');
    Route::get('/users/create',[UserController::class,'create'])->name("users.create");
    Route::post('/users',[UserController::class,'store'])->name("users.store");
    Route::delete('/users/{user}',[UserController::class,'destroy'])->name("users.destroy");

    //Doctors group
    Route::get('/doctors',[DoctorController::class,'index'])->name('doctors.index');
    Route::get('/doctors/create',[DoctorController::class,'create'])->name("doctors.create");
    Route::post('/doctors',[DoctorController::class,'store'])->name("doctors.store");
    Route::get('/doctors/{doctor}/edit',[DoctorController::class,'edit'])->name('doctors.edit');
    Route::put('/doctors/{doctor}',[DoctorController::class,'update'])->name("doctors.update");
    Route::delete('/doctors/{doctor}',[DoctorController::class,'destroy'])->name("doctors.destroy");

    //Articles group
    Route::get('articles',[ArticleController::class,'index'])->name('articles.index');
    Route::get('articles/create',[ArticleController::class,'create'])->name('articles.create');
    Route::post('articles',[ArticleController::class,'store'])->name('articles.store');
    Route::get('/articles/{article}/edit',[ArticleController::class,'edit'])->name('articles.edit');
    Route::put('/articles/{article}',[ArticleController::class,'update'])->name("articles.update");
    Route::delete('/articles/{article}',[ArticleController::class,'destroy'])->name("articles.destroy");


    //Podcasts group
    Route::get('podcasts',[PodcastController::class,'index'])->name('podcasts.index');
    Route::get('podcasts/create',[PodcastController::class,'create'])->name("podcasts.create");
    Route::post('podcasts',[PodcastController::class,'store'])->name('podcasts.store');
    Route::get('/podcasts/{podcast}/edit',[PodcastController::class,'edit'])->name('podcasts.edit');
    Route::put('/podcasts/{podcast}',[PodcastController::class,'update'])->name("podcasts.update");
    Route::delete('/podcasts/{podcast}',[PodcastController::class,'destroy'])->name("podcasts.destroy");

    //Categories group
    Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name("categories.edit");
    Route::put('/categories/{category}',[CategoryController::class,'update'])->name("categories.update");
    Route::delete('/categories/{category}',[CategoryController::class,'destroy'])->name("categories.destroy");

    //Emotions Group
    Route::get('/emotions',[EmotionController::class,'index'])->name("emotions.index");
    Route::get('/emotions/create',[EmotionController::class,'create'])->name("emotions.create");
    Route::post('/emotions',[EmotionController::class,'store'])->name("emotions.store");
    Route::get('/emotions/{emotion}/edit',[EmotionController::class,'edit'])->name("emotions.edit");
    Route::put('/emotions/{emotion}',[EmotionController::class,'update'])->name("emotions.update");
    Route::delete('/emotions/{emotion}',[EmotionController::class,'destroy'])->name("emotions.destroy");

    //Quotes Group
    Route::get('/quotes',[QuoteController::class,'index'])->name("quotes.index");
    Route::get('/quotes/create',[QuoteController::class,'create'])->name("quotes.create");
    Route::post('/quotes',[QuoteController::class,'store'])->name("quotes.store");
    Route::get('/quotes/{quote}/edit',[QuoteController::class,'edit'])->name("quotes.edit");
    Route::put('/quotes/{quote}',[QuoteController::class,'update'])->name("quotes.update");
    Route::delete('/quotes/{quote}',[QuoteController::class,'destroy'])->name("quotes.destroy");

    //creating sport
    Route::get('sports',[SportController::class,'index'])->name('sports.index');
    Route::get('sports/create',[SportController::class,'create'])->name('sports.create');
    Route::post('sports',[SportController::class,'store'])->name('sports.store');;

    //creating yoga
    Route::get('yoga',[YogaController::class,'index'])->name('yoga.index');
    Route::get('yoga/create',[YogaController::class,'create'])->name('yoga.create');
    Route::post('yoga',[YogaController::class,'store'])->name('yoga.store');

    //creating quick
    Route::get('quick',[QuickController::class,'index'])->name('quick.index');
    Route::get('quick/create',[QuickController::class,'create'])->name('quick.create');
    Route::post('quick',[QuickController::class,'store'])->name('quick.store');

    //creating sleep
    Route::get('sleep',[sleepController::class,'index'])->name('sleep.index');
    Route::get('sleep/create',[sleepController::class,'create'])->name('sleep.create');
    Route::post('sleep',[sleepController::class,'store'])->name('sleep.store');

    //creating stress
    Route::get('stress',[stressController::class,'index'])->name('stress.index');
    Route::get('stress/add',[stressController::class,'create'])->name('stress.create');
    Route::post('stress/store',[stressController::class,'store'])->name('stress.store');




});
//End Dashboard
