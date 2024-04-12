<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SiteController extends Controller

{
    public function accueil(){
    return view("site.accueil");

}


    public function presntation(){
    return view("site.presntation");
}





    public function produits(){
    return view("site.produits");



}



   public function contact(){
    return view("site.contact");
}
   public function save(Request $request){
    
    return view("save",compact("request"));
}
}


