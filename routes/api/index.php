<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(base_path('/routes/api/auth.php'));
Route::prefix('/product')->group(base_path('/routes/api/product.php'));
