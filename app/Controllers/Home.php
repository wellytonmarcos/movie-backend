<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function options($any)
    {
        $response = \Config\Services::response();
        return $response->setHeader('Access-Control-Allow-Origin', ALLOW_ORIGIN)
        ->setHeader('Access-Control-Allow-Headers', '*')
        ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE')
        ->setStatusCode(200);
    }
}
