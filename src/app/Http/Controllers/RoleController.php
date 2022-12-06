<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Actions;
use App\Models\ActionsRole;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles      = Role::query()->get();
        $actions    = Actions::query()->get();
        return view('roles.index', compact('roles', 'actions')); 
    }

}
