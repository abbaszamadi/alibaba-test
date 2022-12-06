<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Action;
use App\Models\ActionsRole;
use Illuminate\Http\Request;
use App\Http\Requests\Roles\StoreRoleRequest;

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
        $role = Role::query()->create($request->validated());

        $actions = $request->validated('actions');
        foreach ($actions as $action)
        {
            ActionsRole::query()->firstOrCreate([
                'role_id'   => $role->id,
                'action_id' => $$action
            ]);
        }
        return redirect()->back()->with([
            'message'   => 'سطح دسترسی جدید با موفقیت ایجاد شد'
        ]);
        
    }
}
