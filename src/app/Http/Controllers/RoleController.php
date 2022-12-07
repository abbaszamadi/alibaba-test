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
        $roles      = Role::query()->with('users')->get();
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



    public function edit(Role $role)
    {
        $roleActions = $role->actions->pluck('name')->toArray();
        $actions     = Action::query()->get();
        return view('roles.edit', compact('role', 'roleActions', 'actions'));
    }




    public function update(StoreRoleRequest $request, Role $role)
    {
        (new RoleService)->update($role, $request->all());

        return redirect()->route('roles.index')->with('alert-success', __('message.role_updated'));
    }

}
