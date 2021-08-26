<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showPage()
    {
        $title = 'Authentication';
        return view('authentication', compact('title'));
    }

    public function sign(Request $request)
    {
        if (empty($request->get('Name'))) {
            //sign in
            $user = User::where('EmailAddress', $request->get('EmailAddress'))->get()->first();
            if (!is_null($user)) {
                if (password_verify($request->get('Password'), $user->Password)) {
                    Session::put('user',$user);
                    $message = $user->Name.', Welcome to InUni!';
                } else {
                    $message = 'Incorrect Username or Password!';
                }
            } else {
                $message = 'Incorrect Username or Password!';
            }
        } else {
            //sign up
            $user = new User($request->all());
            $user->Password=password_hash($request->get('Password'),PASSWORD_DEFAULT);
            $user->save();
            $message = 'Your Account Created!';
        }
        return redirect()->back()->with('message', $message);
    }
}
