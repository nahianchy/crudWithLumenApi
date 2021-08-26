<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{

    public function testConn(){
        $result=DB::Connection()->getDatabaseName();
        return $result;
    }

    public function getData(){
        $result=DB::Connection()->select("SELECT * From  details");
        return $result;
    }

    function create(Request $request){

        

    }
    
}
