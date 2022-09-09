<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class UserController extends Controller
{
    // Affiche la vue profile : 
    public function showUserManage() {

        // Récupère les données de tout les utilisateurs :
        $users = User::all();
        return view('admin.user_manage', compact('users'));

    }

    // Affiche la page login : 
    public function showLogin() {

        return view('user.login');

    }

    // Affiche la page dashboard de l'utilisateur : 
    public function showDashboard() {

        return view('user.dashboard');

    }

}
