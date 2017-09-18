<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class HomeController extends Controller
{
    //

    public function index()
    {
        return Game::all();
    }
}
