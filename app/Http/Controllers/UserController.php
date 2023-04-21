<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use DebugBar\DebugBar;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        // return $user = DB::table("questions")->find(2);
        return DB::select("select * from questions");
        
    }

    function getModelData(){
        return User::all(); 
    }

    function gethttp(){
        $userData = Http::post('http://localhost/moodle/webservice/rest/server.php?',
            [
                'wstoken'=>'628ca07c975e4a8a031faae4664b0cee',
                'wsfunction'=>'core_user_get_users',
                'moodlewsrestformat'=>'json',
                'criteria[0][key]'=>'username',
                'criteria[0][value]'=>'admin',
            ]
        );

        $t =Http::post("http://localhost/moodle/webservice/rest/server.php?wstoken=628ca07c975e4a8a031faae4664b0cee&wsfunction=core_user_get_users&moodlewsrestformat=json&criteria[0][key]=username&criteria[0][value]=web_user");

        Log::info($userData);
        return view('httpuser',["collection"=>$t]);
    }
}
