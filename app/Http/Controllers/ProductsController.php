<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $Title = 'Welcome to the Products of Giap';
        $x = 1;
        $y = 2;
        //return view('products.index', compact('Title', 'x', 'y'));
        $myPhone = [
            'name' => 'Samsung Galaxy S21',
            'price' => 1000,
            'color' => 'Phantom Black',
            'isAvailable' => true
        ];
        return view('products.index', compact('myPhone'));
    }
    public function detail($productName)
    {
        $phone = [
            'Samsung-Galaxy-S21' => 'Samsung Galaxy S21',
            'Samsung-Galaxy-S21-Plus' => 'Samsung Galaxy S21 Plus',
        ];
        return view('products.index', [
            'productName' => $phone[$productName]
        ]);
    }
}
