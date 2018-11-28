<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Categorie;
use App\Brand;
use App\Cart;

class CartController extends Controller
{
    //Guardar los productos agregados en session y devolver a la vista
    public function index(){

        $categories = Categorie::all();
        $brands = Brand::all();
        $products = [];
        $session_products = session('cart.products', $products);

        foreach ($session_products as $key => $value) {
            $product = Product::find($session_products[$key]['id']);
            $product->stock = $session_products[$key]['stock'];
            $products[] = $product; 
        }
        
        return view('cart')->with('products', $products)->with('categories',$categories)->with('brands',$brands);
        
    }


    //Remover el producto del carrito por id
    public function remove(Request $request, $id){
        $products = session('cart');
        foreach ($products as $key => $value)
        {
            $i = 0;
            //dd($value[$i]['id']);
            
            if ($value[$i]['id'] == $id) 
           {                
              unset($products [$key]);
                $i++;
            }
        }
        //poner otra vez el array en con el elemento eliminado
       $request->session()->push('cart',$products);
        
        return redirect('/');
    }



    //Remover todos los productos del carrito
    public function removeAll(Request $request){
        $request->session()->flush();
        return redirect()->back();

    }

}
