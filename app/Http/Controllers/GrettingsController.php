<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrettingsController extends Controller
{
    public function showMessage($grettings=null){
        return view('gretting',[
            'title' => $grettings
        ]);
    }
}
