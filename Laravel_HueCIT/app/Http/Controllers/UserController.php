<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function showUsers(){
        // dd('Xin chào');
        $users = User::get();
        dd($users);
    }
}
