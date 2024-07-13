<?php

namespace App\Controllers;

class ApiController
{
    public function start()
    {
        return json_encode(['message' => 'Welcome to the API start endpoint!']);
    }
}
