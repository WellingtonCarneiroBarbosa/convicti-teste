<?php

use App\Helpers\ApiResponser;

if (!function_exists('trackableLogger')) {
    /**
     * Creates a logger instance with debug backtrace
     */
    function trackableLogger(): \App\Helpers\TrackableLogger
    {
        return new \App\Helpers\TrackableLogger();
    }
}

if (!function_exists('apiResponse')) {
    function apiResponse(): ApiResponser
    {
        return new ApiResponser();
    }
}
