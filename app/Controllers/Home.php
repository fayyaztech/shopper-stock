<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function main()
    {
        return view('front/home_page');
    }

    function login()
    {
        return view('front/login');
    }
    function signup()
    {
        return view('front/signup');
    }
    function store()
    {
        return view('front/store');
    }
    function category()
    {
        $data['categories'] =  [
            'Mobiles' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Electronics' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Furniture' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Services' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Clothing' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Home Furnishing' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Kids' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Books' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Stationaries & Office' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Beauty & Personal Care' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Automobiles' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ],
            'Medicines & Drugs' => [
                ['name' => 'Android Mobile Shop', 'image' => '/images/stores/5.jpg', 'address' => 'Paithan Gate'],
                ['name' => 'Hanfees Collection', 'image' => '/images/stores/1.jpg', 'address' => 'Nirala Bazaar'],
                ['name' => 'Lucky Mobile Shop', 'image' => '/images/stores/2.jpg', 'address' => 'Paithan Gate']
            ]
        ];
        return view('front/category',$data);
    }
    function addProducts()
    {
        return view('front/add_products');
    }
    function dashboard()
    {
        return view('front/dashboard');
    }
    function products()
    {
        return view('front/product_list');
    }
    //leave below dont edit
    public function index(): string
    {
        return view('welcome_message');
    }
}
