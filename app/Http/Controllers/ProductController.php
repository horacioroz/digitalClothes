<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Color;
use App\Size;
use App\Image;
use App\Cart;
use Session;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
        public function edit(Product $id){
            $products = Product::all();
            $product = Product::findOrFail($id);
            $prodcolor= Color::pluck('color_name','id');

            $images = Image::all('image_name','product_id' );


            return view('product_edit',compact('prodcolor'))->with('product', $id)->with('categories', Category::all())->with('colors', Color::all())->with('sizes', Size::all())->with('images',Image::all());
        }

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
        $title = 'Listado de Productos';

        $products = Product::with([
            'colors' => function ($q) {
                return $q;
            }
        ])->get();

        return view('product_list')->with('products', $products)
        ->with('title', 'Listado de productos')
        ->with('colors',Color::all()) ;
    }
    public function artList(){
        $title = 'Listado de Productos';

        $products = Product::with([
            'colors' => function ($q) {
                return $q;
            }
        ])->get();

        return view('art_list_new')->with('products', $products)
        ->with('title', 'Listado de productos')
        ->with('colors',Color::all()) ;
    }

    public function productShow($id){
         $product = Product::all();
         $product = Product::findOrFail($id);
        return view('product_show')->with('product', $product) ;
    }

   public function productDestroy($id){
      $product =  Product::find($id);
      $product->active = (0);
      $product->save();
      //$product->delete();//Hay que cambiar esto por el cambio del boolean 'active' por cero
      return redirect('product_list');
    }

    public function active(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->fill(['active' => 1]);
        $product->save();

        return redirect()->route('product_list');
        }

    public function update(Request $request){


    }
    public function getAddToCart(Request $request, $id){
        $product =  Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('art_list_new');


        //En el link del "comprar"
        //<a href="{{route('product.addToCart', ['id' => $product->id] ) }}"

    }


}


// Desde acá
//  /**
    // public function result(Products $product) {

    // $productId = $product->get('product_id');

    // $color = Color::whereHas('products', function($query) use($productId) {
    //     $query->where('product.id', $productId);
    // })->get();

    //     return $color;
    // }

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
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//      public function index(){
//         $categories= category::all();
//         $title = 'Listado de Categorías';
//         return view('category_list')->with('categories', category::all())->with('title', 'Listado de Categorías') ;
//         //return view('products_list', compact('title',  'users'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create(Request $request)
//     {
//             $request->all();
//             $this->validate($request,
//                 ['category_name'=>'required'],
//                 ['category_name.required'=>'Debe ingresar el Nombre']);
//             $category = new Category($request->all());
//             $category->save();

//             return redirect('category_create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store()
//     {
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\category  $category
//      * @return \Illuminate\Http\Response
//      */
//     public function show(category $category)
//     {
//         //
//     }


//     *
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\category  $category
//      * @return \Illuminate\Http\Response

//     public function update(Request $request)
//     {
//         $category = Category::findOrFail($request->id);
//         $category->category_name =  $request->get('categoryName');
//         $category->save();

//         return redirect()->route('category_list');
//         }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\category  $category
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Request $request)
//     {
//         //echo 'Está a punto de eliminar esta categoría, está seguro de querer hacerlo ?';
//         //echo '';
//         $category = Category::findOrFail($request->id);
//         $category->fill(['active' => 0]);
//         $category->save();
//         // dd($category);
//         // DB::table('categories')
//         // ->where('id', $category->id)
//         // ->update(['active' => $category]);

//         //SweetAlertController::solicitudRealizada('Categoria desactivada');
//         return redirect()->route('category_list');
//         }
// /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\category  $category
//      * @return \Illuminate\Http\Response
//      */
//     public function active(Request $request)
//     {
//         //echo 'Está a punto de eliminar esta categoría, está seguro de querer hacerlo ?';
//         //echo '';
//         $category = Category::findOrFail($request->id);
//         $category->fill(['active' => 1]);
//         $category->save();
//         // dd($category);
//         // DB::table('categories')
//         // ->where('id', $category->id)
//         // ->update(['active' => $category]);

//         //SweetAlertController::solicitudRealizada('Categoria desactivada');
//         return redirect()->route('category_list');
//         }


// }
