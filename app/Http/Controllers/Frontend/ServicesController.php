<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\ServiceOffering;
use App\Models\Menus;

class ServicesController extends Controller
{
 public $footer = "";
   public $header = "";
  public function __construct(){
      $footer = $this->footer();
      $header = $this->header();
      // print_r($footer);exit;  
    }
    public function footer(){
      $homes = Home::all();
      return $homes;
    }
public function header(){
      $menus = Menus::all();
      return $menus;
    }

  public function index(){
  	  $homes = Home::all();
  	  $service_offerings= ServiceOffering::all();
       $menus=Menus::all();
    return view('frontend.services', compact('homes','service_offerings','menus'));
   }
   public function create()
    {
        return view('frontend.create');
    }
}
