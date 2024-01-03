<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class CarController extends Controller
{
    //
    function create(Request $request){
        error_log('create car called');
    }



    function read(){
         error_log('read car called');
    return response(Car::all());
    }

    function patch(Request $request){
        error_log('patch car called');
    }



    function delete(){
         error_log('delete car called');
    
    }
}
