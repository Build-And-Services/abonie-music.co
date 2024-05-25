<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'short',
                'permissions' => [
                    // short Permissions
                    'short.create',
                    'short.view',
                    'short.edit',
                    'short.delete',
                    'short.approve',
                ]
            ],
            [
                'group_name' => 'bio',
                'permissions' => [
                    // bio Permissions
                    'bio.create',
                    'bio.view',
                    'bio.edit',
                    'bio.delete',
                    'bio.approve',
                ]
            ],
            [
                'group_name' => 'presave',
                'permissions' => [
                    // presave Permissions
                    'presave.create',
                    'presave.view',
                    'presave.edit',
                    'presave.delete',
                    'presave.approve',
                ]
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    // admin Permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    // profile Permissions
                    'profile.view',
                    'profile.edit',
                    'profile.delete',
                    'profile.update',
                ]
            ]
        ];
        $admin = User::where('email', 'superadmin@mail.com')->first();
        $user = User::where('email', 'user@mail.com')->first();
        $roleSuperAdmin = $this->maybeCreateSuperAdminRole($admin);
        $roleUser = $this->maybeCreateUserRole($user);

        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permissionExist = Permission::where('name', $permissions[$i]['permissions'][$j])->first();
                if (is_null($permissionExist)) {
                    $permission = Permission::create(
                        [
                            'name' => $permissions[$i]['permissions'][$j],
                            'group_name' => $permissionGroup,
                            'guard_name' => 'user'
                        ]
                    );

                    if($permissionGroup != 'admin' && $permissionGroup != 'role'){
                        $roleUser->givePermissionTo($permission);
                    }
                    
                    $roleSuperAdmin->givePermissionTo($permission);
                    $admin->assignRole($roleSuperAdmin);
                    $user->assignRole($roleUser);
                    // dd($roleUser);
                }
            }
        }
    }

    private function maybeCreateSuperAdminRole($admin): Role
    {
        if (is_null($admin)) {
            $roleSuperAdmin = Role::create(['name' => 'superadmin', 'guard_name' => 'user']);
        } else {
            $roleSuperAdmin = Role::where('name', 'superadmin')->where('guard_name', 'user')->first();
        }

        if (is_null($roleSuperAdmin)) {
            $roleSuperAdmin = Role::create(['name' => 'superadmin', 'guard_name' => 'user']);
        }

        return $roleSuperAdmin;
    }

    private function maybeCreateUserRole($user): Role
    {
        if (is_null($user)) {
            $roleSuperAdmin = Role::create(['name' => 'user', 'guard_name' => 'user']);
        } else {
            $roleSuperAdmin = Role::where('name', 'user')->where('guard_name', 'user')->first();
        }

        if (is_null($roleSuperAdmin)) {
            $roleSuperAdmin = Role::create(['name' => 'user', 'guard_name' => 'user']);
        }

        return $roleSuperAdmin;
    }
}
