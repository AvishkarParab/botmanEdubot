<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function loadView(){
        return view("user");
    }

    function getData(Request $req){
        $req->validate([
            'name' => 'required',
            'age' => 'required | max:3'
        ]);

        $xyz = $req->except('_token');


        // return Redirect('user');
        return $xyz;

    }

    function index(){
        return DB::select("select * from mdl_course");
        
    }

    function getModelData(){
        return User::all(); 
    }

    function gethttp(){
        $collection = Http::get("https://reqres.in/api/users?page=2");
        return view('httpuser',["collection"=>$collection['data']]);
    }
}
