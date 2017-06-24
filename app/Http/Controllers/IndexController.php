<?php

namespace App\Http\Controllers;

use App\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
    	$users = Index::all();
    	foreach ($users as $user) {
    		echo $user;
    	}
    }
}
