<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Traits\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use ThrottlesLogins;

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function username()
    {
        return 'email';
    }


    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function sendLoginResponse(Request $request)
    {

        $session = session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        $user = Auth::user();
        $result['token'] =  $user->createToken('test')->plainTextToken;
        $result['user_name'] =  $user->user_name;

        $response = [
            'success' => true,
            'result'    => $result,
            'message' => "User login successfully.",
        ];


        return response()->json($response, 200);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $response = [
            'success' => false,
            'message' => 'Unauthorised',
            'errorCode' => [
                '0' => 'user name or password missmatch',
            ]
        ];

        return response()->json($response);
    }

    protected function authenticated(Request $request, $user)
    {
        //
    }
}
