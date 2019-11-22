<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{

     // Schema::create('products', function (Blueprint $table) {
     //        $table->bigIncrements('id');
     //        $table->string('name', 50);
     //        $table->string('description', 250);
     //        $table->integer('category_id');
     //        $table->string('prod_img')->nullable();
     //        $table->string('color_id')->nullable();
     //        $table->string('size_id')->nullable();
     //        $table->double('price')->nullable();
     //        $table->double('discount_porcent')->nullable();
     //        $table->timestamps();
     //    });
       public function save(Request $request){

        $rules = [
            'name'=> 'required',
            'category' => 'required|numeric',
            'price' => 'numeric',
            'discount_porcent' => 'numeric'
        ];
        $msg = [
            'name.required' => 'Este campo :attribute es requerido...',
            'required' => 'Este campo :attribute es requerido...',
            'numeric' => 'Ingrese en este campo :attribute sólo números...',
        ];

        $this->validate($request,$rules,$msg);
        $product = new Product($request->all());
        $product->save();
        return  redirect('/product');
    }
    public function index(){
        $products = Product::all();
        $title = 'Listado de Productos';
        return view('product_list')->with('products', Product::all())->with('title', 'Listado de productos') ;
        //return view('products_list', compact('title',  'users'));
    }

    public function productShow($id){
         $product = Product::all();
         $product = Product::findOrFail($id);
        return view('product_show')->with('product', $product) ;
    }

   public function productDelete($id){
      $product =  Product::find($id);
      $product->active = (0);
      $product->save();
      //$product->delete();//Hay que cambiar esto por el cambio del boolean 'active' por cero
      return redirect('product_list');

    }

    // public function userUpdate( Request $request){
    //     //dd($request->all());
    //     //$users = User::all();
    //     $user = User::findOrFail($request->id);
    //     //$user = new User;
    //     //$user = $request;
    //     //$user->fill($request->all());
    //     //dd($id);
    //     $user->update($request->all());
    //     //dd('llegue');

    //     return redirect()->route('profile', $user->id);
    // }

}
