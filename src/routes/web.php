<?php

use Illuminate\Support\Facades\Route;

Route::scopeBindings()
    ->middleware(config("score-crop.middleware.web"))
    ->group(function () {});