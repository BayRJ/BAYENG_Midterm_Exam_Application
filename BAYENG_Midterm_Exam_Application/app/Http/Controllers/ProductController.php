<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productMethod(){
        $products = ["Headphones", "Camers", "Laptop", "Bluetooth speakers", "Hard Drive", "Mouse", "Power Bank", "Printer", "Earbuds","Games consoles", "MP3 Player", "Power Strip", "Nest Thermostat", "Charger"];
        return view("product",$product);
    }
}
