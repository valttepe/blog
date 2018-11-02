<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('User/show')->with('test', 'Victoria');
        //$this->view->test='jotain';
        // View::share('test', 'value');
        // return view('user/show', 'jotainhienoa');
        // return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
