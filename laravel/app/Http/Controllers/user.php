<?php
namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
//use App\Models\gul;
use Illuminate\Support\Facades\Http;

class user extends Controller {

	function index() {
		$data = Http::get("https://reqres.in/api/users?page=1");
		return view('users', ['collection' => $data['data']]);

	}}
