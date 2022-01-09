<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MemberRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input = [
            'users' => User::whereRoleIs(['user'])->get(),
            'admins' => User::whereRoleIs(['admin'])->get()
        ];

        return view('admin.users.index', $input);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $input = [
            'roles' => Role::all(),
        ];
        return view('admin.users.create', $input);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->attachRole($request->role);

        return redirect('admin/members')->with(['alert'=>[
            'icon'=>'success',
            'title'=>'Done',
            'text'=>'New memeber created successfully',
        ]]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, User $user)
    {
        $input = [
            'user' => User::find($id),
            'roles' => Role::all(),
        ];

        return view('admin.users.edit', $input);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = !is_null($request->password) ? Hash::make($request->password) : $user->password;
        $user->attachRole($request->role);
        $user->save();

        return redirect('admin/members')->with(['alert'=>[
            'icon'=>'success',
            'title'=>'Done',
            'text'=>'memeber updated successfully',
        ]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if(!is_null($user)){
            $user->delete();
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
