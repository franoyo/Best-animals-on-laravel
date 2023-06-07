<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function index(){

        return view("Admin_views.dashboard_inicio_admin");
    }
    public function caja(){
        return view("Admin_views.dashboardCaja");
    }
    public function stock(){
return view("Admin_views.admin_stock");
    }
}
