<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Resources\User  as UserResource;
use App\Http\Resources\UserCollection  ;

class UserController extends Controller
{
    //

    public function show($id)
    {
        return new UserResource(User::find($id));
    }

    public function index()
    {
        return new UserCollection(User::paginate());

    }
}
