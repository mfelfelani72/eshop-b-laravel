<?php

namespace App\Http\Controllers\API\General;

use App\Http\Controllers\Controller;
use App\Models\General\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
        $user = new User();
        return response()->json([
            'users' => $user->getUser()
        ], 200);
    }
}
