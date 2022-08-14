<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    // Affiche la page login : 
    public function showLogin() {

        return view('user.login');

    }

}
