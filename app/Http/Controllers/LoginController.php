<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
public function showLoginForm()
{
    if (auth()->check()) {
        return redirect('/adminhome');
    }

    return view('login');
}

public function login(Request $request)
{
$credentials = $request->only('username', 'password');

if (auth()->attempt($credentials)) {
// Authentication passed...
return redirect()->intended('/');
}

return redirect()->back()->withErrors([
'username' => 'Invalid username or password',
]);
}
}