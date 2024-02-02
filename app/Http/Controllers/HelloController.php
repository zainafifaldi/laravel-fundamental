<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index() {
        echo "Hello";
    }

    function create() {

    }

    function world_message() {
        echo "World";
    }
}
