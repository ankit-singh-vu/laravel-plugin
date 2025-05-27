<?php

use Illuminate\Support\Facades\Route;
use Plugins\Blog\Controllers\PostController;

Route::get('/plugin-blog', [PostController::class, 'index']);
