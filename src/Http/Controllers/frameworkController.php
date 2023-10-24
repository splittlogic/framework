<?php

namespace splittlogic\framework\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\framework\framework;

class frameworkController extends Controller
{


  public function index ()
  {

    $content = 'This is splittlogic/framework'; 

    return view('framework::blank', ['content' => $content]);

  }


}
