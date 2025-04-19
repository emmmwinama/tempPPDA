<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    function fetchSupplier($id){
        $supplier = Http::get('https://api.ppda.mw/validate/'.$id);
        if ($supplier->ok()){
            $supplierData = $supplier->json();

            return view('validation', [
                'supplier' => $supplierData
            ]);
        }
        else{
            $error = "Sorry, we could not fetch that data for you";
            return view('validation', [
               'error' => $error
            ]);
        }


    }
}
