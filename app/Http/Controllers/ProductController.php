<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Route;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $item = Product::find($id);
        return view('detail',['item'=>$item]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItem()  // number of item on the navbar cart(eg: cart(2))
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        if(!session()->has('user'))
        {
            return view('login');
        }
        else
        {
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();

            return view('cartList',['products'=>$products]);
        }
    }

    function removeCart(Request $req)
    {
        Cart::destroy($req->id);
        return redirect('/cartlist');
    }

    function orderNow()
    {
        if(!session()->has('user'))
        {
            return view('login');
        }
        else
        {
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
           ->join('products','cart.product_id','=','products.id')
           ->where('cart.user_id',$userId)
          ->sum('products.price');

           return view('orderNow',['total'=>$products]);
        }
    }
}
