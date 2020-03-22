<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Firebase\JWT\JWT;

class RoomController extends Controller
{
	public function __construct()
	{
		$this->middleware("auth");
	}

    public function create(Request $request)
    {
    	$request->validate([
    		'name' => "string|max:20|required"
    	]);

    	$room = new Room;
    	$room->name = $request->name;
    	$room->user_id = auth()->user()->id;
    	$room->save();

    	return redirect()->action('HomeController@index');
    }

    public function showCreateForm()
    {
    	return view("room.create");
    }

    public function redirectToRoom(Room $room)
    {
    	$jitsi_server_url = config("app.jitsi_url");
    	$jitsi_jwt_token_secret = config("app.jwt_secret");

    	$payload = array(
    		"aud" => "my_jitsi_app_id",
    		"iss" => "my_jitsi_app_id",
    		"sub" => "meet.jitsi",
    		"room" => $room->id,
    		"context" => [
    			'user' => [
    				'name' => auth()->user()->name
    			]
    		]
    	);

    	$token = JWT::encode($payload, $jitsi_jwt_token_secret);
    	$url = $jitsi_server_url . '/' . $room->id . '?jwt=' . $token;
        
    	return redirect()->away($url);
    }

    public function delete(Room $room)
    {
    	$room->delete();
    	return redirect()->action("HomeController@index");
    }
}
