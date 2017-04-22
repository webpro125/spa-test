<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserData;

class AuthController extends Controller
{
    /**
     * View Home Page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }


    /**
     * Do Register and Login.
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister(LoginRequest $request)
    {
        if (Auth::attempt([
            'email'    => $request->get('email'),
            'password' => 'aaa',
        ], 1)) {

            $user = Auth::user();
            UserData::where('user_id', $user->id)->delete();

            return redirect()
                ->intended('/register')
                ->with('flash_notification.message', 'Logged in successfully')
                ->with('flash_notification.level', 'success');
        }else {
            User::create([
                'name' => 'aaa',
                'email' => $request->get('email'),
                'password' => bcrypt('aaa'),
            ]);

            Auth::attempt([
                'email'    => $request->get('email'),
                'password' => 'aaa',
            ], 1);

            return redirect()
                ->intended('/register')
                ->with('flash_notification.message', 'Logged in successfully')
                ->with('flash_notification.level', 'success');
        }
    }

}
