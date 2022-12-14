<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Editor\Authentication;
use App\Http\Controllers\Editor\Profile;
use App\Http\Controllers\Editor\Essays;

Route::post('authenticate', [Authentication::class, '_loginEditor'])->name('editor-login');
Route::get('logout', [Authentication::class, 'logout'])->name('editor-logout');

Route::post('profile/editor/{id_editors}', [Profile::class, 'update'])->name('update-editor-profile');

Route::post('ongoing/accept/{id_essay}', [Essays::class, 'accept'])->name('accept-essay');
Route::post('ongoing/reject/{id_essay}', [Essays::class, 'reject'])->name('reject-essay');
Route::post('ongoing/upload/{id_essay}', [Essays::class, 'uploadEssay'])->name('upload-essay');
Route::post('ongoing/addcomment/{id_essay}', [Essays::class, 'addComment'])->name('add-comment');
Route::post('ongoing/uploadrevise/{id_essay}', [Essays::class, 'uploadRevise'])->name('upload-revise');