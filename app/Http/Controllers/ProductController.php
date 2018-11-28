<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Categorie;
use App\Brand;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $brands = Brand::all();
        $products = Product::orderBy('id', 'ASC')->paginate(15);
        //$products = Product::inRandomOrder()->take(9)->get();
        return view('listaproductos')->with('products', $products)->with('categories',$categories)->with('brands',$brands);  
    }


    public function addToCart(Request $request){
        $request->session()->push('cart.products', [
            
            'id' => $request->product_id,
            'stock' => $request->stock,
        ]);
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $brands = Brand::all();
        $products = Product::orderBy('id','DESC')->paginate(10);

        return view('agregarproducto')->with('products', $products)->with('categories',$categories)->with('brands',$brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //ver codigo para incluir el path a la base de datos
       
        //$file = $request->file->store('files', 'public');
       
        
        $product = new Product($request->all());
        //$product->photopath_slot1 = $file;
        //($product);
        
        $product->save();
        return redirect()->back();
    }
    public  function search () 
    { 
        $products = Input::get('products');
        // y aca escribis la query
 
        $producto_buscado = DB::table('products')->where('name', 'LIKE',"%$products%")->get();
 
        return view('layouts.resultados')->with('producto_buscado', $producto_buscado);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = Categorie::all();
        $brands = Brand::all();
        $products = Product::orderBy('id', 'ASC')->paginate(15);
        //$products = Product::inRandomOrder()->take(9)->get();
        return view('listaproductos')->with('products', $products)->with('categories',$categories)->with('brands',$brands);  
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categories = Categorie::all();
        $brands = Brand::all();
        $products = Product::find($id);
        return view('editarproducto')->with('products', $products)->with('categories',$categories)->with('brands',$brands);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->brand_id = $request->brand_id;
        $product->categorie_id = $request->categorie_id;
        $product->description = $request->description;
        $product->photopath_slot1 = $request->photopath_slot1;

        $product->save();
        return redirect('/shop/' .$id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->destroy($id);

        //Flash::error('El producto'. $product->name . 'ha sido eliminado' );
        return redirect()->route('product.list');
    }
}