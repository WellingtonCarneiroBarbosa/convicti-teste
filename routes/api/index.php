<?php

Route::middleware('auth.client')->group(function () {
    require_once __DIR__ . '/auth/index.php';
});
