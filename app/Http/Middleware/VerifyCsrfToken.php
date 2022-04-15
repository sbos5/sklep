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
    protected $except = [ 'http://127.0.0.1:8000/store',
    'http://127.0.0.1:8000/client',
    'http://127.0.0.1:8000/update/*'
    ,'http://127.0.0.1:8000/delete/*',
    'http://127.0.0.1:8000/c_delete/*',
    'http://127.0.0.1:8000/c_update/*',
    '/c_store', '/order','/o_show/*','/o_update/*','/o_delete/*','/o_store'
        
    ];
}
