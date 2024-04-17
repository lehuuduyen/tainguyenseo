<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // $credentials = $request->getCredentials();
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin');
        } else {
            // Authentication failed...
            return back()->withInput()->withErrors(['username' => 'Invalid username or password']);
        }
        // if (!Auth::validate($credentials)){
        //     return redirect()->to('login')->withErrors(trans('auth.failed'));
        // }

        // $user = Auth::getProvider()->retrieveByCredentials($credentials);

        // Auth::login($user);

        // return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended('admin.index');
    }
}
