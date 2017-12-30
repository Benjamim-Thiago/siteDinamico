<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function index()
	{
		return view('admin.login.index');
	}

	public function login(Request $request)
	{
		//08:31 de video
		dd($request->all());
	}
}
