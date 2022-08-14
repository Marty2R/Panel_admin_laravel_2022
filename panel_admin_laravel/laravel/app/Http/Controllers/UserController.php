<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // Affiche la page login : 
    public function showLogin() {

        return view('user.login');

    }

    // Affiche la page dashboard de l'utilisateur : 
    public function showDashboard() {

        return view('user.dashboard');

    }

}
