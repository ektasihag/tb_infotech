<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function checkStatus()

{
    return "Somethings from the main branch!";
    // Additional logic
    return "Somethings from the feature branch!";
}
