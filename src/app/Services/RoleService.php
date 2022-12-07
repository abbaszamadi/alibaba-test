<?php
namespace App\Services;

use App\Models\Role;
use App\Models\ActionsRole;

class RoleService
{

    public function create($data)
    {
        $role = Role::query()->create($data);
        $this->addActionsToRole($role->id, $data['actions']);
    }


    public function update($role, $data)
    {
        ActionsRole::query()->where('role_id', $role->id)->delete();

        foreach ($data['actions'] as $action)
        {
            ActionsRole::query()->create([
                'role_id'       => $role->id,
                'action_id' => $action
            ]);
        }
    
    }


    private function addActionsToRole($roleId, $actions)
    {
        foreach ($actions as $action)
        {
            ActionsRole::query()->firstOrCreate([
                'role_id'   => $roleId,
                'action_id' => $action
            ]);
        }
    }

}