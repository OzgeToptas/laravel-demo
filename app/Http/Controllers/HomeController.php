<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $customers = Customers::paginate(10);
        return view('home',compact('customers'));
    }
}
