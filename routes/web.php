<?php

use Liuhelong\laravelAdmin\Configx\Http\Controllers\ConfigxController;

Route::get('configx/edit/{id?}', ConfigxController::class.'@edit');
Route::post('configx/saveall/{id?}', ConfigxController::class.'@saveall');
Route::put('configx/sort', ConfigxController::class.'@postSort');
Route::put('configx/delfile/{id}', ConfigxController::class.'@delFile');
