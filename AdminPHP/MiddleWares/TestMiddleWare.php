<?php
namespace MiddleWares;


use Closure;
use Http\Request;
use Http\Response;
use MiddleWare\MiddleWares\MiddleWare;

class TestMiddleWare implements MiddleWare
{
    public function hanlde(Request $request, Closure $next)
    {
        /** @var Response $response */
        $response = $next($request);
        $response->headers->set('logos留言','世纪末彼岸花丛中的死亡结界');
        return $response;
    }
}