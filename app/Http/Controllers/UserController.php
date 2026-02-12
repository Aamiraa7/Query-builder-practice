<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser(){
        $users=DB::table('users')->get(); 
        // return $users;
        return view('allusers', [ 'data'=> $users]);
    }

 public function singleUser(string $id){
    $user = DB::table('users')->where('id', $id)->first();
    return view('singleUser', ['data'=>$user]);
}

public function addUser(){
    $user=DB::table('users')->insertorIgnore([
        'name'=>'Fawad',
        'email'=>'jawad@gmail.com',
        'age'=>22,
        'city'=>'Swabi',
        'password'=>Hash::make('Holala123')
    ]);
    if($user){
    return 'User successfully added';
    }
    else{
        return 'Data is not added there is some error';
    }
}

public function updateUser(){
    $user=DB::table('users')->where('id',3)->update([
        'name'=> 'Hakeem KHan',
        'age'=>44,
    ]);
}

}
