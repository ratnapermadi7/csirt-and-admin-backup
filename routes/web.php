<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\RfcController;
use App\Http\Controllers\VisiController;


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


Route::get('/exam', [ExamController::class, 'index'])->name('exam.index');
Route::get('/exam/create', [ExamController::class, 'create'])->name('exam.create');
Route::post('/exam',[ExamController::class, 'store'])->name('exam.store');
Route::post('/exam/update{id}',[ExamController::class, 'updatedata'])->name('exam.update');
Route::get('/exam/delete{id}', [ExamController::class, 'delete'])->name('exam.delete');
Route::get('/exam/show{id}',[ExamController::class, 'show'])->name('exam.show');

Route::get('/webuser', [ExamController::class, 'webuser'])->name('customer.webuser');



//ADMIN CMS CSIRT

Route::get('/admincsirtlogin', [LoginController::class, 'login'])->name('login');
Route::get('/actionlogin', [LoginController::class, 'actionLogin'])->name('action.login');
// Route::post('/login',[LoginController::class, 'store'])->name('login.store');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/highlight-news', [NewController::class, 'index_news'])->name('news.index')->middleware('auth');
Route::post('/highlight-news',[NewController::class, 'store'])->name('news.store');
Route::post('/highlight-news/update{id}',[NewController::class, 'update'])->name('news.update');

Route::get('/sub-news', [NewController::class, 'index_subnews'])->name('subNews.index');
Route::post('/sub-news',[NewController::class, 'store'])->name('subNews.store');
Route::post('/sub-news/update{id}',[NewController::class, 'updateSubNews'])->name('subNews.update');


Route::get('/profile', [ProfileController::class, 'index'])->name('admin.index');
Route::post('/profile',[ProfileController::class, 'store'])->name('admin.store');
Route::post('/profile/update{id}',[ProfileController::class, 'update'])->name('admin.update');

Route::get('/visi', [VisiController::class, 'index'])->name('visi.index');
Route::post('/visi',[VisiController::class, 'store'])->name('visi.store');
Route::post('/visi/update{id}',[VisiController::class, 'update'])->name('visi.update');

Route::get('/helpdesk', [HelpdeskController::class, 'index'])->name('admin.helpdesk');
Route::get('/helpdesk/file_laporan{id}', [HelpdeskController::class, 'file_laporan'])->name('admin.file_laporan');

Route::get('/rfc', [RfcController::class, 'index'])->name('rfc.index');
Route::post('/rfc',[RfcController::class, 'store'])->name('rfc.store');
Route::post('/rfc/update{id}',[RfcController::class, 'update'])->name('rfc.update');



//CSIRT WEB//

Route::get('/csirthome', [NewController::class, 'csirt_news'])->name('csirt.home');


Route::get('/csirtprofile', [ProfileController::class, 'csirt_profile'])->name('csirt.profile');


Route::get('/csirtvisi', [VisiController::class, 'csirt_visi'])->name('csirt.visi');
Route::get('/csirthelpdesk', [HelpdeskController::class, 'csirt_helpdesk'])->name('csirt.helpdesk');
Route::post('/csirthelpdesk',[HelpdeskController::class, 'store'])->name('csirt.store');

?>