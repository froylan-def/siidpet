<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;
use Session;

class verificarAccesos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        /*if (Auth::check()) {
            $rol = Auth::user()->IDRol;
            
            $permisos = DB::table('rol_permiso')
            ->select('*')
            ->join('permisos', 'rol_permiso.idpermiso', '=', 'permisos.id')
            ->where('rol_permiso.idrol', $rol)
            ->get();

            Session::put('permisos', json_encode($permisos) );
        }*/

        return $next($request);
    }
}
