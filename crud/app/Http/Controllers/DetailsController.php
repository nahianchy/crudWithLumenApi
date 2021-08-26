<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller
{

    function select(Request $request)
    {


        //    $SQL="SELECT * From  details";

        //    $result=DB::select($SQL)

        //using request method

        //    $request=DB::select($SQL);


        return $request->header();
    }

    function create(Request $request)
    {

        $name = $request->input("name");
        $roll = $request->input("roll");

        $city = $request->input("city");

        $phone = $request->input("phone");

        $class = $request->input("class");

        $SQL = "INSERT INTO `details`(`name`,`roll`,`city`,`phone`,`class`) VALUES (?,?,?,?,?)";

        $result = DB::insert($SQL, [$name, $roll, $city, $phone, $class]);

        if ($result == 1) {
            return "data inserted";
        } else {
            return "data not inserted";
        }
    }

    function delete(Request $request)
    {
        $id = $request->input('id');

        $SQL = "DELETE FROM `details` WHERE `id`=?";

        $result = DB::delete($SQL, [$id]);

        if ($result == 1) {
            return "data deleted";
        } else {
            return "data not deleted";
        }
    }

    function update(Request $request)
    {
        $id   = $request->input("id");
        $name = $request->input("name");
        $roll = $request->input("roll");

        $city = $request->input("city");

        $phone = $request->input("phone");

        $class = $request->input("class");

        $SQL = "UPDATE `details` SET `name`=?,`roll`=?,`city`=?,`phone`=?,`class`=? WHERE `id`=?";

        $result = DB::update($SQL, [$name, $roll, $city, $phone, $class, $id]);

        if ($result == 1) {
            return "data updated";
        } else {
            return "data not updated";
        }
    }
}
