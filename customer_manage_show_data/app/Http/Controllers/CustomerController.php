<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            '0' => [
                'id' => '1',
                'name' => 'Cuong',
                'bod' => '27-06-1995',
                'email' => 'cuongpham@gmail.com'
            ],
            '1' => [
                'id' => '2',
                'name' => 'Dat',
                'bod' => '09-02-1995',
                'email' => 'datnguyen@gmail.com'
            ],
            '2' => [
                'id' => '3',
                'name' => 'Hung',
                'bod' => '16-07-1997',
                'email' => 'hungdz1102@gmail.com'
            ]
        ];
        return view('customers.master',compact('customers'));
    }
}
