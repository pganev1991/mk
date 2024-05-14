<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\RoleModel;
use Auth;
use Hash;

class UserController extends Controller
{
    public function list()
    {
        $data['getRecord'] = UserModel::getRecord();
        return view('panel.user.list', $data);
    }

    public function add()
    {
        $data['getRole'] = RoleModel::getRecord();
        return view('panel.user.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users',
        ]);

        $user = new UserModel;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect('panel/user')->with('success', "Успешно добавихте нов потребител!");
    }

    public function edit($id)
    {
        $data['getRole'] = RoleModel::getRecord($id);
        $data['getRecord'] = UserModel::getSingle($id);
        return view('panel.user.edit', $data);
    }

    public function update($id, Request $request)
    {
        $user = UserModel::getSingle($id);
        $user->name = trim($request->name);
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect('panel/user')->with('success', "Успешно редактирахте потребител!");
    }

    public function delete($id)
    {
        $user = UserModel::getSingle($id);
        $user->delete();

        return redirect('panel/user')->with('success', "Успешно изтрихте потребител!");
    }
}