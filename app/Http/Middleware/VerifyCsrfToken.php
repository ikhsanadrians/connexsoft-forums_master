<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    public function handle($request, Closure $next)
    {
        if($request->route()->named('logout')) {
            if (auth()->check()) {
                auth()->logout();
            }

            return redirect('/');
        }

        return parent::handle($request, $next);
    }

    protected $except = [
        //
    ];
}