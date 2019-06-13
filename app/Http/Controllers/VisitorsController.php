<?php

namespace App\Http\Controllers;

use App\Visitors;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function viewVisitors(){
        $visitors = Visitors::get();

        $visitors = json_decode(json_encode($visitors));

        //return $visitors;

        return view('admin.viewVisitors')->with(compact('visitors'));
    }
}
