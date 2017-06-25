<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeopleController extends Controller
{
    public function index() {
    	$provice = People::find(3)->provice->pname;
    	echo $provice;
    }
}
