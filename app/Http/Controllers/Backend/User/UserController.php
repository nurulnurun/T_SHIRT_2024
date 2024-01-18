<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userList()
    {
        // dd('Users List');

        return view('Backend.Pages.Users.UserList');
    }

    public function CreateNewUserForm()
    {
        // dd('User Create New Form');

        return view('Backend.Pages.Users.CreateNewUserForm');
    }

    public function userStore(Request $User_Store)
    {
        // dd($User_Store->all());

        User::create([
            'user_id'=>$User_Store->user_id,
            'user_name'=>$User_Store->user_name,
            'user_email'=>$User_Store->user_email,
            'user_password'=>'required|min:6',
            'user_image'=>$User_Store->user_image
        ]);
    }
}
