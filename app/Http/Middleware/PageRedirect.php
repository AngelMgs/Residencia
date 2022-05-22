<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Page;
use Illuminate\Http\Request;

class PageRedirect
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
        if( ((bool) Page::where('name','=',$request->host)->value('name')) ){
            if(Page::where('name','=',$request->host)->value('status')){
                
                return $next($request);
            }
            
        }
			return abort(403);
    }
}
