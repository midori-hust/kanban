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
            //TODO:Change name before upload
            $user->avatar_path = 'avatar/'.$fileimg->getClientOriginalName();
            $user->save();
        }
       return view('profile');
    }
    
    public function update(){
        
    }
    public function show(){
        
    }

}
