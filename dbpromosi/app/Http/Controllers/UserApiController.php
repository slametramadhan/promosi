<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    public function index (){
        $user = User::all();
        return response()->json(['message' => 'berhasil','data' => $user]);
    }
    //
}
