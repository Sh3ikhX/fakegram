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
        $data =[
            'p1'=> 'iphone',
            'p2'=> 'samsung',
            'p3'=> 'nokia',
            'p4'=> 'xiomi'
        ];
        //with methon of parsing data to views but good for only 1 variable
        // return view('products.index')->with('title' , $title);
        return view('products.index')->with('data' , $data);

    }
    public function about(){
        return 'Abouts Us page';
    }
}
