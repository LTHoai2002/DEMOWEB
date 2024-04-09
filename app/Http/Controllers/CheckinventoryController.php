<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckinventoryController extends Controller
{
    public function index(){
        return view('warehouse.checkinventory');
    }
}
