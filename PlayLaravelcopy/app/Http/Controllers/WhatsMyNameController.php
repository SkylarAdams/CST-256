<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsMyNameController extends Controller
{
    public function index(Request $request)
    {
        //usage of path method
        $path = $request->path();
        echo "Path Method = " .$path;
        echo "<br>";
        
        //Usage of it method
        $method = $request->isMethod('get') ? "GET" : "POST";
        echo 'GET or POST Method: '.$method;
        echo '<br>';
        
        $url = $request -> url();
        echo 'URL METHOD = '. $url;
        echo '<br>';
        
        //Display the form data
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        echo "Your name is: " . $firstname . " " . $lastname;
        echo '<br>';
        
        //Render a response View and pass the form data to it
        $data = ['firstname'=> $firstname, 'lastname' => $lastname];
        return view('thatswhoiam')->with($data);
    }
}
