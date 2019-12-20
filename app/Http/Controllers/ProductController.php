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

       public function create(Request $request){
        // $categories = Category::all();
        // $product = "";

        $rules = [
            'name'=> 'required',
            'category' => 'required|numeric',
            'price' => 'numeric'|'trim',
            'discount_porcent' => 'numeric'|'trim'
        ];
        $msg = [
            'name.required' => 'Este campo :attribute es requerido...',
            'required' => 'Este campo :attribute es requerido...',
            'numeric' => 'Ingrese en este campo :attribute sólo números...',
        ];
        if($request = ""){
        $this->validate($request,$rules,$msg);
        $product = new Product($request->all());

        $product->create();
         // return view('product_create',compact('prodcolor'))->with('categories', Category::all())->with('colors', Color::all())->with('sizes', Size::all())->with('images',Image::all());
        return  view('product_create')
        ->with('categories',Category::all())
                    ->with('colors',Color::all())
                    ->with('sizes',Size::all())
                    ->with('products',Product::all()) ;}
        else{
        return  view('product_create')
                    ->with('categories',Category::all())
                    ->with('colors',Color::all())
                    ->with('sizes',Size::all())
                    ->with('products',Product::all()) ;
        }
        }

        public function signup(Request $request){
          $reglas = [
            "password" => "string |min:8"
          ];

        }
        public function edit(Product $id){
            $products = Product::all();
            $product = Product::findOrFail($id);
            $prodcolor= Color::pluck('color_name','id');
            $images = Image::all('image_name','product_id' );


            return view('product_edit',compact('prodcolor'))->with('product', $id)->with('categories', Category::all())->with('colors', Color::all())->with('sizes', Size::all())->with('images',Image::all());
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
            'images' => function ($q) {
                return $q->where('active', 1);
            },
            'colors',
        ])->paginate(12);

//        dd($products->toArray());

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

    public function update(Request $request ){
        $product = Product::findOrFail($request->id);
        // $request->price = doubleval($request->price);
        // $request->price = floatval(number_format(floatval($request->price), 2, ".", "," ));
        // dd($request->price);

        $product->update($request->all());

        // return redirect()->route('product_edit');
        return back();

    }
    public function getAddToCart(Request $request, $id){
        $product =  Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $color = $request->color_color_id+1;
        $size = $request->size_size_id+1;
        $cart->add($product, $product->id, $color, $size);
        // dd($color, $size);
        // dd($request);
        // dd($cart);
        $request->session()->put('cart', $cart);
        return redirect()->back();
        // return redirect()->route('art_list_new');
    }
    public function getCart() {
        // $products =  Product::all();
        if(!Session::has('cart')){
            return view('shoppingCart',['products' => null ]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd($cart);
        return view('shoppingCart',['products' => $cart->items, 'totalPrice' =>$cart->totalPrice ]);

    }
    public function getShowCart() {
        if(!Session::has('cart')){
            return view('shoppingCart',['products' => null ]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return redirect()->view('shoppingCart')->with('cart', $cart);

    }
        public function art_show(Product $id){
            $products = Product::all();
            $product = Product::findOrFail($id);
            $prodcolor= Color::pluck('color_name','id');
            $images = Image::all('image_name','product_id' );


            return view('art_view_newest',compact('prodcolor'))->with('product', $id)->with('categories', Category::all())->with('colors', Color::all())->with('sizes', Size::all())->with('images',Image::all());
        }

    //     public function getProductImage(){

    //         foreach($images as $image){
    //             if($image->product_id==$product->id && $image->active==1 && $image[0]){
    //                 $img =  $image->image_name;
    //                 return  $img;
    //         }
    //     }

    // }
     public function getImageArtList()
    {
        foreach($product->images as $image){
            dd($product->image);
            if($image->product_id==$product->id && $image->active==1){
               $storedItemImage =['image' => $image->image_name];
               dd($storedItemImage);
                    $img = $storedItemImage->image;
                    return $img;}
                    else{
                        $img = 'No hay imágenes cargadas';
                        return $img;
                    }

        }
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
    // {
    //         $request->all();
    //         $this->validate($request,
    //             ['category_name'=>'required'],
    //             ['category_name.required'=>'Debe ingresar el Nombre']);
    //         $category = new Category($request->all());
    //         $category->save();

    //         return redirect('category_create');
    // }

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
