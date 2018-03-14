<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        echo "index Function";
    }
    public function fetchUsers(){
        $tempResult =  User::orderBy('id', 'DESC')->get(['name','address','phonenumber','created_at'])->toArray();
        return view ('user.view')->with(compact('tempResult'));
    }
}
