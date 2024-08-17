<?php

namespace App\Http\Controllers\API\General;

use App\Http\Controllers\API\BaseController;

use App\Models\General\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function getUsers()
    {
        // $user = new User();
        // $users = $user->getUser();

        // if ($users)
        //     return $this->sendResponse($users, 200);

        // return $this->sendError('no users', 100);

        $user = new User();
        return response()->json([
            'users' => $user->getUser()
        ], 200);
    }
}
