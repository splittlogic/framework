<?php

use Illuminate\Support\Facades\Route;

use splittlogic\framework\Http\Controllers\frameworkController;

/*
|--------------------------------------------------------------------------
| Routes must be passed through the web middleware to allow for
|   validation errors and flash messages to be displayed.
|--------------------------------------------------------------------------
*/

Route::get(
  'splittlogic/framework',
  [frameworkController::class, 'index']
)->name('splittlogic.framework');
