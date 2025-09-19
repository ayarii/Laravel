<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    public function show(\Symfony\Component\HttpFoundation\Request $request)
    {
        $age = $request->get('age') ;
        $interet = $request->get('interet') ;
       return view('advisor/show',['age'=>$age,'interet'=>$interet]);
    }
}
