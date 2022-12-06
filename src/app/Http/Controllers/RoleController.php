<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Action;
use App\Models\ActionsRole;
use Illuminate\Http\Request;
use App\Http\Requests\Roles\StoreRoleRequest;
use App\Services\RoleService;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles      = Role::query()->get();
        $actions    = Action::query()->get();

        return view('roles.index', compact('roles', 'actions')); 
    }



    public function store(StoreRoleRequest $request)
    {
        (new RoleService)->create($request->all());   

        return redirect()->back()->with([
            'message'   => 'سطح دسترسی جدید با موفقیت ایجاد شد'
        ]);

    }

    

}
