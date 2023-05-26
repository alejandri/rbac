<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //make Permission ADMIN
        // $permission = Permission::findByName('add_users');
        //     $role = Role::findByName('admin');
        //     $role->givePermissionTo($permission);
        //     $permission->assignRole($role);

        // $permission = Permission::findByName('edit_users');
        //     $role = Role::findByName('admin');
        //     $role->givePermissionTo($permission);
        //     $permission->assignRole($role);

        // $permission = Permission::findByName('show_users');
        //     $role = Role::findByName('admin');
        //     $role->givePermissionTo($permission);
        //     $permission->assignRole($role);

        // $permission = Permission::findByName('delete_users');
        //     $role = Role::findByName('admin');
        //     $role->givePermissionTo($permission);
        //     $permission->assignRole($role);


        //make Permission GERENTE
        // $permission = Permission::findByName('add_users');
        //     $role = Role::findByName('gerente');
        //     $role->givePermissionTo($permission);
        //     $permission->assignRole($role);

        // $permission = Permission::findByName('edit_users');
        //     $role = Role::findByName('gerente');
        //     $role->givePermissionTo($permission);
        //     $permission->assignRole($role);

        // $permission = Permission::findByName('show_users');
        //     $role = Role::findByName('gerente');
        //     $role->givePermissionTo($permission);
        //     $permission->assignRole($role);


        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions;

        return view('roles.show', compact('role', 'rolePermissions'));
    }

}