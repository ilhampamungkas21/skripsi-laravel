<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginCustomController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function loginpembeli(Request $request)
    {

      $this->validate($request,[
        'email'              => 'required',
        'password'          => 'required',

        ]);

      if (\Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
      {
        return redirect('/');
      }
    }
}
