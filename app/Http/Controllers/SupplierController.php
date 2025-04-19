<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //For handling supplier data
    function showRegisteredSuppliers(){
        $suppliersdata = array(
            array(1,"BQ Associates", "2023-12-01"),
            array(2,"BQ Associates & BQ Associates & BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(3,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(4,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(5,"BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(6,"BQ Associates", "2023-12-01"),
            array(7,"BQ Associates", "2023-12-01"),
            array(8,"BQ Associates", "2023-12-01"),
            array(9,"BQ Associates", "2023-12-01"),
            array(10,"BQ Associates", "2023-12-01"),
            array(11,"BQ Associates", "2023-12-01"),
            array(12,"BQ Associates", "2023-12-01"),
            array(13,"BQ Associates", "2023-12-01"),
            array(14,"BQ Associates", "2023-12-01"),
        );

        return view('registered-suppliers', ['suppliers' => $suppliersdata]);
    }

    function showDebarredSuppliers(){
        $suppliersdata = array(
            array(1,"BQ Associates", "2023-12-01"),
            array(2,"BQ Associates & BQ Associates & BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(3,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(4,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(5,"BQ Associates & BQ Associates & BQ Associates", "2023-12-01"),
            array(6,"BQ Associates", "2023-12-01"),
            array(7,"BQ Associates", "2023-12-01"),
            array(8,"BQ Associates", "2023-12-01"),
            array(9,"BQ Associates", "2023-12-01"),
            array(10,"BQ Associates", "2023-12-01"),
            array(11,"BQ Associates", "2023-12-01"),
            array(12,"BQ Associates", "2023-12-01"),
            array(13,"BQ Associates", "2023-12-01"),
            array(14,"BQ Associates", "2023-12-01"),
        );

        return view('debarred-suppliers', ['suppliers' => $suppliersdata]);
    }
}
