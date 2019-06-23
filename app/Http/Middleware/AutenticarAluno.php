<?php


namespace App\Http\Middleware;


use Closure;

class AutenticarAluno
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->get('id_aluno')) {
            return redirect('aluno/');
        }

        return $next($request);
    }
}
