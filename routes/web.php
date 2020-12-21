<?php

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

Route::namespace('Admin')->group(function () {
    Route::delete('/answers/deleteOldAnswer/{answer}/{comment}', 'AnswerController@deleteAnsewrAndUpdateCommentAnswer')->name('answers.deleteOldAnswer');
    Route::delete('/answers/deleteShow/{answer}', 'AnswerController@deleteShowAnswer')->name('answers.deleteShowAnswer');
    Route::get('/', 'MelodiController@welcome');
    Route::get('/users', 'UserController@showUser')->name('user.list');
    Route::get('/users/oldComment/{id_user}/{id_comment}', 'CommentController@showOldComment')->name('comments.oldComment');
    Route::get('/answers/shows/{id_user}/{id_comment}', 'AnswerController@shows')->name('answers.shows');
    Route::delete('/answers/delete/{id_user}/{id_comment}', 'AnswerController@delete_answer')->name('answr.destory');
    Route::resources([
        '/melodis' => MelodiController::class,
        '/comments' => CommentController::class,
        '/answers' => AnswerController::class,
        '/albums' => AlbumController::class,
        '/galleries' => GalleryController::class
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
