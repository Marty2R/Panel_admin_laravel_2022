<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Controllers\Auth\AuthenticatedSessionController;

class AdminController extends Controller
{

    // Afficher la vue dashboard admin :
    public function showAdminDashboard() {

        // Total des utilisateurs :
        $nb_users = User::all();

        // Utilisateurs ajouté aujourd'hui :
        $nb_users_today = User::whereBetween('created_at', ["01-01-2000 00:00:00", date('Y-m-d')."23:59:59"])->get();
        
        // Utilisateurs ajouté les 7 derniers jours : 
        $nb_users_today = User::where('created_at', '2022-09-08 22:36:51')->get();

        // Utilisateurs ajouté les 30 derniers jours :
        $nb_users_today = User::where('created_at', '2022-09-08 22:36:51')->get();

        return view('admin.adminpanel', compact('nb_users', 'nb_users_today'));

    }

    public function deletUser(Request $request) {

        $user = User::where('id', request('id'))->delete();

        return redirect('/admin/user-manage');

    }

    public function showAdminEditeUser() {

        return view('adminediteuser');

    }

}
