<?php

namespace App\Http\Controllers;

use App\Maintext;

class BaseController extends Controller
{
   public function getIndex($url=null){ 
   $obj = Maintext::where('url',$url)->first();
   return view ('maintext', compact('obj'));
   }
}
