<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapungController extends Controller
{
   function index(){
     echo "ini dari controller";
   }

   function punjangga(){
     echo "bebek goreng ny pujangga";
   }

   function siti(){
     return view('mamalia/kucing');
   }
}
