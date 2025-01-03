<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'user/signup',
        'user/signin',
        'user/me',
        // 'user/*', // não vai verificar o CSRF para todas as rotas que começam com 'user/'
        // '*', // não vai verificar o CSRF para todas as rotas
    ];
}
