<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LearningController extends Controller
{

    public function index()
    {
        $response=Http::get('https://my-json-server.typicode.com/typicode/demo');

        if($response->status()){
            return "yes";
        }
        else

        return $response;



    }


}
