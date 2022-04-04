<?php

use App\Http\Controllers\JonahController;
Route::get('/', [JonahController::class, 'index']);
Route::get('/chapter/{chapter_number}', [JonahController::class, "readByChapter"]);
Route::get('/all-chapters', [JonahController::class, 'readAllChapters']);