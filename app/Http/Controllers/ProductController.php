<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index()
    {$data= Product::all();
        return view('product',['products'=>$data]);
    }
    function details($id)
    {
$data= Product::find($id);
return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req)
    {   if($req->session()->has('user'))
        {
        $cart=new Cart;
        $cart->usre_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $usreId=Session::get('user')['id'];
        return Cart::where('usre_id',$usreId)->count();
    }
    function cartList()
    {
     $userId=Session::get('user')['id'];
     $products=DB::table('cart')
     ->join('products','cart.product_id','=','products.id')
     ->where('cart.usre_id',$userId)
     ->select('products.*','cart.id as cart_id')
     ->get();
     return view('cartlist',['products'=>$products]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
       $total= $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.usre_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
      $userId=Session::get('user')['id']; 
     $allCart=Cart::where('usre_id',$userId)->get();
     foreach($allCart as $cart)
     {
       $order=new Order;
       $order->product_id=$cart['product_id'];
       $order->usre_id=$cart['usre_id'];
       $order->status='pending';
       $order->payment_method=$req->payment;
       $order->payment_status="pending";
       $order->address=$req->address;
       $order->save();
       Cart::where('usre_id',$userId)->delete();
     }
     $req->input();
     return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders=DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.usre_id',$userId)
         ->get();
         return view('myorders',['orders'=>$orders]);
     }
}
