<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //For handling supplier data
    function showRegisteredSuppliers(){
        $suppliersdata = [
            [1,"BQ Associates", "2023-12-01"],
            [2,"BQ Associates & BQ Associates & BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [3,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [4,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [5,"BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [6,"BQ Associates", "2023-12-01"],
            [7,"BQ Associates", "2023-12-01"],
            [8,"BQ Associates", "2023-12-01"],
            [9,"BQ Associates", "2023-12-01"],
            [10,"BQ Associates", "2023-12-01"],
            [11,"BQ Associates", "2023-12-01"],
            [12,"BQ Associates", "2023-12-01"],
            [13,"BQ Associates", "2023-12-01"],
            [14,"BQ Associates", "2023-12-01"],
        ];

        return view('registered-suppliers', ['suppliers' => $suppliersdata]);
    }

    function showDebarredSuppliers(){
        $suppliersdata = [
            [1,"BQ Associates", "2023-12-01"],
            [2,"BQ Associates & BQ Associates & BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [3,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [4,"BQ Associates BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [5,"BQ Associates & BQ Associates & BQ Associates", "2023-12-01"],
            [6,"BQ Associates", "2023-12-01"],
            [7,"BQ Associates", "2023-12-01"],
            [8,"BQ Associates", "2023-12-01"],
            [9,"BQ Associates", "2023-12-01"],
            [10,"BQ Associates", "2023-12-01"],
            [11,"BQ Associates", "2023-12-01"],
            [12,"BQ Associates", "2023-12-01"],
            [13,"BQ Associates", "2023-12-01"],
            [14,"BQ Associates", "2023-12-01"],
        ];

        return view('debarred-suppliers', ['suppliers' => $suppliersdata]);
    }
}
