<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\CartService;  
class CartController extends Controller
{   
    protected   $cart;

    public function __construct(CartService $cart)
    {
        $this->cart = $cart;    
    }

    public function index()
    {
        return view('admin.cart.customer', [
            'title' => 'Danh sách đơn hàng',
            'customer' => $this->cart->getCustomer()
        ]);
    }
}
