<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller {

	function login(Request $req) {
		$user = User::where(['email' => $req->email])->first();

		if (!$user || !Hash::check($req->password, $user->password)) {
			return " <h1>user name or password is not matched </h1> ";
		} else {
			$req->session()->put('user', $user);
			return redirect('/');
		}
	}
	function registration(Request $req) {
		if (User::where(['email' => $req->useremail])->exists()) {
			return "<h1>You Are Already Registered";
		} else {
			$user = new User;
			$user->name = $req->username;
			$user->email = $req->useremail;
			$user->password = Hash::make($req->userpassword);
			$user->save();
			return redirect('/login');
		}
	}

}
