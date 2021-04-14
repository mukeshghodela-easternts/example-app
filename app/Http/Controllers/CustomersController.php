<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    function getData(Request $request) {
        return $request->input();
    }

    function loadCustomers() {
        return view('customers');
    }
}
