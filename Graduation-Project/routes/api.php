<?php

use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\PodcastController;
use App\Http\Controllers\Api\PrescriptionController;
use App\Http\Controllers\Api\QuoteController;
use App\Http\Controllers\Api\RateController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\EmotionController;
use App\Http\Controllers\Api\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SafeSpaceController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/user/register', [AuthController::class,'register']);
Route::post('/user/login', [AuthController::class,'userLogin']);
Route::post('/doctor/login',[AuthController::class,'doctorLogin']);

Route::middleware('auth:sanctum','abilities:web')->group(function ()
{
    Route::get('/categories',[CategoryController::class,'index']);
    Route::post('/add-category-to-user',[CategoryController::class,'store']);
    Route::get('/doctors',[DoctorController::class,'index']);
    Route::get('/doctor/{doctor_id}',[DoctorController::class,'show']);
    Route::post('/add-rate/{doctor_id}',[RateController::class,'store']);
    Route::post('/add-notifications/{doctor_id}',[MessageController::class,'store']);
    Route::get('/notifications/{doctor_id}',[MessageController::class,'index']);
    Route::post('/add-appointment/{doctor_id}',[AppointmentController::class,'store']);
    Route::get('/appointment/{doctor_id}',[AppointmentController::class,'show']);
    Route::get('/emotions',[EmotionController::class,'index']);
    Route::get('/quotes',[QuoteController::class,'index']);
    Route::get('/articles',[ArticleController::class,'index']);
    Route::get('/podcasts',[PodcastController::class,'index']);
    Route::post('/add-diary',[SafespaceController::class,'store']);
    Route::get('/diaries',[SafespaceController::class,'index']);
    Route::get('/meditation-video/quick_and_easy',[VideoController::class,'show_quick_and_easy']);
    Route::get('/meditation-video/sleep-better',[VideoController::class,'show_sleep_better_meditation']);
    Route::get('/meditation-video/stress',[VideoController::class,'show_stress']);
    Route::get('/yoga-videos',[VideoController::class,'show_yoga']);
    Route::get('/sport-videos',[VideoController::class,'show_sport']);
    Route::post('/add-review/{doctor_id}',[ReviewController::class,'store']);
    Route::get('/reviews/{doctor_id}',[ReviewController::class,'index']);
    Route::get('/show-prescriptions',[PrescriptionController::class,'index']);
    Route::post('/add-favorite-to-podcast/{podcast_id}',[PodcastController::class,'store']);
    Route::get('/favorite-podcasts',[PodcastController::class,'favourite']);
    Route::post('/add-favorite-to-doctor/{doctor_id}',[DoctorController::class,'store']);
    Route::get('/favorite-doctors',[DoctorController::class,'favourite']);
    Route::get('/user-appointments',[AppointmentController::class,'index']);
    Route::get('/user-info',[UserController::class,'show']);
    Route::post('/update-user-info',[UserController::class,'update']);



});
Route::get('recommendation/articles',[ArticleController::class,'recommend']);
Route::get('recommendation/podcasts',[PodcastController::class,'recommend']);
Route::get('recommendation/yoga-videos',[VideoController::class,'recommendYoga']);
Route::get('recommendation/meditation-video/stress',[VideoController::class,'recommendShow_stress']);
Route::get('recommendation/meditation-video/quick_and_easy',[VideoController::class,'recommendShow_quick_and_easy']);
Route::get('recommendation/meditation-video/sleep-better',[VideoController::class,'recommendShow_sleep_better_meditation']);


Route::middleware('auth:sanctum','abilities:doctors')->group(function (){
    Route::get('/doctor-appointments',[AppointmentController::class,'appDoctor']);
    Route::post('/add-prescription/{user_id}',[PrescriptionController::class,'store']);
});

