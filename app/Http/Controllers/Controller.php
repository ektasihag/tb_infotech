<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function checkStatus()
    {
        return "Somethings from the feature branch!";
    }
}
