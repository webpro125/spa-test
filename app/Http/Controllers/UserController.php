<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\UserData;
use App\Http\Requests\UserRequest, Mail;
use App\Mail\UserNoti;

class UserController extends Controller
{
    /**
     * View Home Page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('register');
    }

    /**
     * Do Register and Login.
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister(UserRequest $request)
    {
        $requestData = $request->all();

        $requestData['user_id'] = Auth::user()->id;
        $requestData['desired_loan'] = $request->has('desired_loan') ? implode(",", $request->get('desired_loan')) : "";

        UserData::create($requestData);

        Mail::to(Auth::user()->email)->send(new UserNoti(Auth::user()->id));

        return redirect('/result');
    }

    public function result() {
        $user = Auth::user();
        return view('result', compact('user'));
    }

}
