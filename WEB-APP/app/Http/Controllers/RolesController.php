<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use DataTables,Auth;

class RolesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the roles page
     *
     */
    public function index()
    {
        try{
            $permissions = Permission::pluck('name','id');

            return view('settings.roles', compact('permissions'))->with("currentModule", "settings");
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    /**
     * Show the role list with associate permissions.
     * Server side list view using yajra datatables
     */

    public function getRoleList(Request $request)
    {
        
        $data  = Role::get();

        return Datatables::of($data)
                ->addColumn('permissions', function($data){
                    $roles = $data->permissions()->get();
                    $badges = '';
                    foreach ($roles as $key => $role) {
                        $badges .= '<span class="badge badge-dark m-1">'.$role->name.'</span>';
                    }
                    if($data->name == 'Super Admin'){
                        return '<span class="badge badge-success m-1">All permissions</span>';
                    }

                    return $badges;
                })
                ->addColumn('action', function($data){
                    if($data->name == 'Super Admin'){
                        return '';
                    }
                    if (Auth::user()->can('manage_roles')){
                        return '<div class="table-actions">
                                    <a href="'.url(app()->getLocale() . '/role/edit/'.$data->id).'" ><i class="fa fa-edit f-16 mr-15 text-green"></i></a>
                                    <a href="'.url(app()->getLocale() . '/role/delete/'.$data->id).'"  ><i class="fa fa-trash f-16 text-red"></i></a>
                                </div>';
                    }else{
                        return '';
                    }
                })
                ->rawColumns(['permissions','action'])
                ->make(true);
    }

    /**
     * Store new roles with assigned permission
     * Associate permissions will be stored in table
     */

    public function create(Request $request)
    {
        // laravel default validator
        $validator = Validator::make($request->all(), [
            'role' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try{

            $role = Role::create(['name' => $request->role]);
            $role->syncPermissions($request->permissions);

            if($role){ 
                return redirect()->route('settings.roles', app()->getLocale())->with('success', 'Role created succesfully!');
            }else{
                return redirect()->route('settings.roles', app()->getLocale())->with('error', 'Failed to create role! Try again.');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function edit($lng, $id)
    {
        
        $role  = Role::where('id',$id)->first();
        //dd("ok");
        // if role exist
        if($role){
            $role_permission = $role->permissions()
                                    ->pluck('id')
                                    ->toArray();

            $permissions = Permission::pluck('name','id');

            return view('settings.rolesEdit', compact('role','role_permission','permissions'))->with("currentModule", "settings");
        }else{
            return redirect('404');
        }
    }

    public function update($lng, Request $request)
    {
        
        // update role
        $validator = Validator::make($request->all(), [
            'role' => 'required',
            'id'   => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try{
            
            $role = Role::find($request->id);

            $update = $role->update([
                          'name' => $request->role
                      ]);

            // Sync role permissions
            $role->syncPermissions($request->permissions);

            return redirect()->route('settings.roles', app()->getLocale())->with('success', 'Role info updated succesfully!')->with("currentModule", "settings");
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);

        }
    }


    public function delete($id)
    {
        $role   = Role::find($id);
        if($role){
            $delete = $role->delete();
            $perm   = $role->permissions()->delete();

            return redirect('roles')->with('success', 'Role deleted!');
        }else{
            return redirect('404');
        }
    }
}
