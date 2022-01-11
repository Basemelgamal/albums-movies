<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input = [
            'roles' => Role::all(),
        ];

        return view('admin.roles.index',$input);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create($request->all());
        return redirect('admin/roles')->with(['alert'=>[
            'icon'=>'success',
            'title'=>'Done',
            'text'=>'Role created successfully',
        ]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $input = [
            'role'=>$role,
        ];
        return view('admin.roles.edit',$input);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->all());


        return redirect('admin/roles')->with(['alert'=>[
            'icon'=>'success',
            'title'=>'Done',
            'text'=>'Role Updated successfully',
        ]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Role $role)
    {
        if(!is_null($role)){
            $role->delete();
            return response()->json(['err' => 0 ,'alert' =>
            [
                'icon'=>'success',
                'title'=> 'Deleted'
            ]]);
        }else{
            return response()->json(['err' => 1 ,'alert' =>
            [
                'icon'=>'error',
                'title'=> 'Failed!',
                'text'=> 'Try again in another time'
            ]]);
        }
    }
}
