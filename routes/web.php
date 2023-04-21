<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

// Route::get('/user/{name}', function ($name) {
//     return view('user',["name"=>$name]);
// });

//calling as a controller
Route::get("user", [UserController::class, 'loadView']);

// Route::view("user", "user");
Route::view("about", "about");





Route::post("login", [UserController::class, 'getData']);

Route::view("login", "login");

//database config 

Route::get("db", [UserController::class, 'index']);

//model db
Route::get("model", [UserController::class, 'getModelData']);

Route::get("httpdata", [UserController::class, 'gethttp']);



Route::match (['get', 'post'], '/botman', [BotManController::class, 'handle']);





//cares official code starts here

//admin call

Route::view("adminhome", "adminhome");
// Route::view("adminlogin", "adminlogin");


//admin logout
Route::get('/adminlogout', function () {
    if(session()->has('adminName')){
        session()->pull('user',null);
    }
    // return redirect('adminlogin');
});

// if admin is already logged in
Route::get('adminlogin', function () {
    if(session()->has('adminName')){
        return view('adminhome');
    }
    return view('adminlogin');
});

//admin login details and validation
Route::post("admin",[AdminController::class,'getCredentials']);

//admin upload page 
Route::view('/upload','upload');

//admin upload file 
Route::post("/upload",[AdminController::class,'getUploadFile']);

//add Course
Route::view("/addcourse","manageCourse.addCourse");
//view Course
Route::get("/viewcourse",[AdminController::class,'getCourse']);
//adding the course form
Route::post("/addc",[AdminController::class,'addCourse']);
//edit course
Route::get("/editcourse",[AdminController::class,'editCourse']);
//add chapter
Route::get("/addchapter",[AdminController::class,'getCourseAddChapter']);
//adding the chapter
Route::post("/addchap",[AdminController::class,'addChapter']);
//get chapter
Route::get("/viewchapter",[AdminController::class,'getChapter']);

//add Question

//subtopic
Route::get("/addsubtopic",[AdminController::class,'getSubtopicChapter']);
//adding the subtopic
Route::post("/addsubt",[AdminController::class,'addSubtopic']);
//viewsubtopic
Route::get("/viewsubtopic",[AdminController::class,'getSubTopic']);

//navigate to page
Route::view("/addquestion", "manageQuest.addquestion");
//adding the question from form
Route::post("/add",[AdminController::class,'addQuestion']);

//add Question

//navigate to page 

//navigate to page
Route::get('/viewquestion',[AdminController::class,'getQuestion']);
Route::get('/viewcourse',[AdminController::class,'getCourse']);
Route::get('/trial',[AdminController::class,'trial']);
//adding the question from form
// Route::post("/view",[AdminController::class,'addQuestion']);