<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rooms = Room::paginate(10);
        return view('welcome', compact("rooms"));
    }

    public function showAccountForm()
    {
        $account = auth()->user();
        return view("auth.account");
    }

    public function updateAccount(Request $request)
    {   
        $request->validate([
            "password" => "string|min:8|confirmed",
            "name" => "required|string|max:255"
        ]);
        
        $user = User::find(auth()->user()->id);
        
        if($request->has("password"))
        {
            $user->password = bcrypt($request->password);
        }
        
        $user->name = $request->name;
        $user->save();

        return redirect()->action("HomeController@index");
    }
}
