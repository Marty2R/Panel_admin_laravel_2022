<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function edit(Request $request) {
        // la méthode qui récupèrera les données du formulaire

        // Modifie les données dans la base de données :
        $user = User::find(request('id'));
        $user->name = request('name');
        $user->last_name = request('last_name');
        $user->email = request('email');

        $user->password = request('password');
        $user->updated_at = request('updated_at');
        $user->created_at = request('created_at');
        $user->is_admin = request('is_admin');

        $user->save();

        // redirige vers la page profile :
        return redirect('/profile');

    }

}
