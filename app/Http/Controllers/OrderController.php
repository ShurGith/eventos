<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Invoice;
class OrderController extends Controller
{
    public function create(){
       Order::create([
        'user_id'=> 10,
        'amount' => 25,
       ]);
    }
}
