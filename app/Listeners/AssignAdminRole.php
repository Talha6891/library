<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssignAdminRole
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */

    /**
     * Handle the event.
     */
    public function handle(Authenticatable $validated): void
    {
        //assign admin role to user
        $adminRole = Role::findOrCreate( 'admin');
        $validated->assignRole($adminRole);

        $permissions = ['create','update','delete','read'];

        foreach ($permissions as $permission) {

            $userPermission = Permission::findOrCreate($permission);

            $adminRole->givePermissionTo($userPermission);
        }
    }
}

