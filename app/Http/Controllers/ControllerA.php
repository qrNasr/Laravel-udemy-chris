<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerA extends Controller
{
    public function helloo(){
        return view("Nasr"); // Renders the 'Nasr' view
    }

    public function hi(){
        return view("Mona"); // Renders the 'Mona' view
    }

    public function omar(){
        return view("Omar"); // Renders the 'Omar' view
    }

    public function malak(){
        return view("Malak"); // Renders the 'Malak' view
    }

    public function shahd(){
        return view("Shahd"); // Renders the 'Shahd' view
    }

    public function king(){
        return view("King"); // Renders the 'King' view
    }
}

