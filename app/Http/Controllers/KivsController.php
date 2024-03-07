<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KivsController extends Controller
{
    //
    public function __invoke(){
        return(view('kivs.index'));
    }

    public function create(){
        return(view('kivs.create'));
    }

    public function store(){
        return(view('kivs.store'));
    }
}
