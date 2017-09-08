<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{  
    public function index()
    {
        $user=[
            '0'=>['ten'=>'bi',
                'dia_chi'=>'194'
                ],
            '1'=>['ten'=>'bo',
            'dia_chi'=>'192']
        ];
        return view('pages.index',compact('user'));  
    }
}