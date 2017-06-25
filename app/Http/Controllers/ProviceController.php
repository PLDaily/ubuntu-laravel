<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provice;

class ProviceController extends Controller
{
    public function index() {
    	$people = Provice::find(1)->people;
    	return $people;
    }
}
