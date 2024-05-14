<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users';

    static public function getSingle($id)
    {
        return UserModel::find($id);
    }

    static public function getRecord()
    {
        // return UserModel::get();
        return UserModel::select('users.*', 'role.name as role_name')
                ->join('role', 'role.id', '=', 'users.role_id')
                ->orderBy('users.id', 'desc')->get();
    }
}
