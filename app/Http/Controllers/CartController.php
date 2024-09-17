<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $result = $this->cartService->create($request);
        // dd($this->cartService);
        if ($result === false) {
            return redirect()->back();
        }

        // return redirect('/carts');
        return response()->json(['success' => true, 'message' => 'Product added to cart successfully!']);
    }

    public function show()
    {
        $products = $this->cartService->getProduct();

        return view('carts.list', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts')
        ]);
    }

    public function update(Request $request)
    {
        $this->cartService->update($request);
        return redirect()->back();
    }

    public function remove($id = 0)
    {
        $this->cartService->remove($id);
        return redirect()->back();
    }

    public function addCart(Request $request)
    {
        $this->cartService->addCart($request);
        return redirect()->back();

    }

    
}
