<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myblogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\MessageController;



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

Route::get('/article', function () {
    return view('blog.article');
});
// ブログ用ルート
// ホーム画面
Route::get('/index', [myblogController::class, 'index'])->name('index');
// ブログ一覧画面
Route::get('/blogindex', [myblogController::class, 'blogindex'])->name('blogindex');
// ブログ作成画面
Route::get('/create', [myblogController::class, 'create'])->name('create');
// ブログ詳細ページ
Route::get('/blogindex/{myblog}', [myblogController::class, 'show'])->name('show');
// 編集画面表示
Route::get('/blogindex/{myblog}/edit', [myblogController::class, 'edit'])->name('edit');

// ブログ投稿処理
Route::post('/blogindex', [myblogController::class, 'store'])->name('store');
// 編集処理
Route::patch('/blogindex/{myblog}', [myblogController::class, 'update'])->name('update');
// 削除処理
Route::delete('/blogindex/{myblog}', [myblogController::class, 'destroy'])->name('destroy');


// コンタクトフォームルート
// 入力フォーム
Route::get('/contact', [ContactsController::class, 'index'])->name('contact');
// 確認画面
Route::post('/contact/confirm', [ContactsController::class, 'confirm'])->name('confirm');
// 送信完了画面
Route::post('/contact/thanks', [ContactsController::class, 'send'])->name('send');

// 掲示板ルート
// 一覧画面
Route::get('/boards', [BoardController::class, 'index'])->name('boards.index');
// 新規投稿画面
Route::get('/boards/create', [BoardController::class, 'create'])->name('boards.create');
// 新規投稿処理
Route::post('/boards', [BoardController::class, 'store'])->name('boards.store');
// 投稿詳細ページ
Route::get('/boards/{id}', [BoardController::class, 'show'])->name('boards.show');
// 詳細ページメッセージ投稿
Route::post('/boards/{id}/messages', [MessageController::class, 'store'])->name('messages.store');

// 編集画面表示
// 編集処理
// 削除処理
