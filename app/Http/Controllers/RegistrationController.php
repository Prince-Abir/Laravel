<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Client;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){

        echo "<pre>";
    
        $request->validate([
            'name' => 'required',
            'email' =>'required|email',
            'password' =>'required',
            'confirm_password' =>'required|same:password',	
        ]);
        $client = new Clients;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = bcrypt($request->password);
        $client->save();

        return redirect('/register/view');
    }


    public function deleteItem($id){

        Clients::find($id)->delete();
        return redirect()->back();

    }


    public function viewClient(){

        $clients = Clients::all();

        $data = compact('clients');

        // echo "<pre>";
        // print_r($clients->toArray());
        // echo "</pre>";
        // die();


        return view('viewClient')->with($data);
    }
}
