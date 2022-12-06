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