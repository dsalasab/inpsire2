<?php

use Ghusr\Inspire\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('inspire', Ghusr\Inspire\Controllers\InspirationController::class);