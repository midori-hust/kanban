<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AvatarRequest;


class AvatarController extends Controller
{
    public function store(AvatarRequest $request){
        $fileimg = $request->avatar;
        $fileimg->move('avatar',$fileimg->getClientOriginalName());
        return view('profile',['avatar_path','avatar'.$fileimg->getClientOriginalName()]);
    }
    
    public function update(){}
    public function show(){}

}
