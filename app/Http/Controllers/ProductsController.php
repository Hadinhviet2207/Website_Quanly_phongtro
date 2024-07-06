<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        //how to pas data to view?
        // $title = "Welcome to Page's Duy";
        // $x = 1;
        // $y = 3;
        // //có 2 cách nhưng compact thông dụng hơn with() do chỉ truyền 1 parameter
        // return view('products.index', compact('title', 'x', 'y'));
        // $myphone = [
        //     'name' => 'samsung s20+',
        //     'year' => 2024,
        //     'isFavorited' => true,
        // ];
        // return view('products.index', compact('myphone'));
        // return view('products.index', [
        //     'myphone' => $myphone

        // ]);
        print_r(route('products'));
        return view('products.index');
    }
    public function about() {
        return view('This is About Page');
    }

    public function detail($id) {
        return "product's id = " . $id;
    //     $phone = [
    //         'iphone 15' => 'iphone 15',
    //         'ss' => 'ss'
    //     ];
    //     return view('products.index', [
    //         'product' => $phone[$productName] ?? 'unknown product',
    // ]);
    }
}
