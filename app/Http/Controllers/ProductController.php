<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Phone Product Index
        public function index()
    {
        $products = [
            [
                "name" => "Redmagic 10",
                "brand" => "Redmagic",
                "price" => "₱35,000"
            ],
            [
                "name" => "Galaxy S24",
                "brand" => "Samsung",
                "price" => "₱55,000"
            ],
            [
                "name" => "ROG Phone 8",
                "brand" => "ASUS",
                "price" => "₱45,000"
            ]
        ];

        return view('products', compact('products'));
    }
}
