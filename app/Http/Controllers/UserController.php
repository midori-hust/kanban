<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AvatarRequest;

use App\User;

class UserController extends Controller
{
    public function store(AvatarRequest $request){
        $fileimg = $request->avatar;
        $fileimg->move('avatar',$fileimg->getClientOriginalName());
        $user = user::find($request->id); 
        if($user != null){
            $user->avatar_path = 'avatar/'.$fileimg->getClientOriginalName();
            $user->save();
        }
       // return view('profile',['avatar_path'=>'avatar/'.$fileimg->getClientOriginalName()]);
       return $request->id;
    }
    
    public function update(){}
    public function show(){}

}
