<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class HandleApiRequests extends Middleware
{
    protected $except = [
        '/register',
        '/login',
        '/logout',
        '/tasks/*',
    ];
}