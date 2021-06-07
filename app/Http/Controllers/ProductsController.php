<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
       
       
        $title = "Learning Laravel";
        $description = "Created by Abdul Moid";
       //compact method of parsing data to views
        //return view('products.index' ,compact('title','description'));

        //with methon of parsing data to views but good for only 1 variable
        return view('products.index')->with('title' , $title);

    }
    public function about(){
        return 'Abouts Us page';
    }
}
