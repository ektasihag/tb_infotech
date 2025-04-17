<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurWork;
use App\Models\Home;
use App\Models\Menus;


class WorkController extends Controller
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

  $ourWork= OurWork::all();
   $homes = Home::all();
    $menus=Menus::all();
    return view('frontend.our-work',compact('ourWork','homes','menus'));
   }

   public function create()
    {
        return view('frontend.create');
    }
}
