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

        $nb_users = User::where('created_at', '2022-08-13 22:36:51')->get();
        $nb_users_today = User::where('created_at', '2022-09-08 22:36:51')->get();
        return view('admin.adminpanel', compact('nb_users', 'nb_users_today'));

    }

    public function showAdminEditeUser() {

        return view('adminediteuser');

    }

}
