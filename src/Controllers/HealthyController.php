<?php

namespace Sfneal\Healthy\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Sfneal\Controllers\AbstractController;

class HealthyController extends AbstractController
{
    /**
     * Return a 200 response code when the application is up & running.
     *
     * @param Request $request
     *
     * @return Application|ResponseFactory|Response
     */
    public function __invoke(Request $request)
    {
        return response('OK', 200)->header('Content-Type', 'text/plain');
    }
}
