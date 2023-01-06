<?php

use App\Http\Controllers\HomeController;
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

Route::get('/' ,[HomeController::class ,'links'])->name('links');
Route::post('store-student' ,[HomeController::class ,'storeStudent'])->name('storeStudent');
Route::get('students' ,[HomeController::class ,'getStudents'])->name('getStudents');
Route::get('creat-student' ,[HomeController::class ,'creatStudent'])->name('creatStudent');

Route::get('create-prof' ,[HomeController::class ,'createProf'])->name('createProf');
Route::post('store-prof' ,[HomeController::class ,'storeProf'])->name('storeProf');
Route::get('profs' ,[HomeController::class ,'getProfs'])->name('getProfs');

Route::get('create-group' ,[HomeController::class ,'createGroup'])->name('createGroup');
Route::post('store-group' ,[HomeController::class ,'storeGroup'])->name('storeGroup');
Route::get('groups' ,[HomeController::class ,'getGroups'])->name('getGroups');

Route::get('create-course' ,[HomeController::class ,'createCourse'])->name('createGCourse');
Route::post('store-course' ,[HomeController::class ,'storeCourse'])->name('storeCourse');
Route::get('courses' ,[HomeController::class ,'getCourses'])->name('getCourses');

Route::post('search-name-students' ,[HomeController::class ,'searchNameStudents'])->name('searchNameStudents');
Route::get('search-name-students' ,[HomeController::class ,'searchStudents'])->name('searchStudents');

Route::post('search-code-students' ,[HomeController::class ,'getStudentCode'])->name('getStudentCode');
Route::get('search-code-students' ,[HomeController::class ,'StudentCode'])->name('StudentCode');

Route::post('search-code-ProfCode' ,[HomeController::class ,'getProfCodeCode'])->name('getProfCode');
Route::get('search-code-ProfCode' ,[HomeController::class ,'profCodeCode'])->name('ProfCode');

Route::post('search-name-prof-code' ,[HomeController::class ,'nameProfCode'])->name('nameProfCode');
Route::get('search-name-prof-code' ,[HomeController::class ,'getNameProfCode'])->name('getNameProfCode');
