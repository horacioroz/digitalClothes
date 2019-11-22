<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
        $categories= category::all();
        $title = 'Listado de Categorías';
        return view('category_list')->with('categories', category::all())->with('title', 'Listado de Categorías') ;
        //return view('products_list', compact('title',  'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            $request->all();
            $this->validate($request,
                ['category_name'=>'required'],
                ['category_name.required'=>'Debe ingresar el Nombre']);
            $category = new Category($request->all());
            $category->save();

            return redirect('category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $id)
    {    $categories = Category::all();
         $category = Category::findOrFail($id);

          return view('category_edit')->with('category', $id) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->category_name =  $request->get('categoryName');
        $category->save();

        return redirect()->route('category_list');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //echo 'Está a punto de eliminar esta categoría, está seguro de querer hacerlo ?';
        //echo '';
        $category = Category::findOrFail($request->id);
        $category->fill(['active' => 0]);
        $category->save();
        // dd($category);
        // DB::table('categories')
        // ->where('id', $category->id)
        // ->update(['active' => $category]);

        //SweetAlertController::solicitudRealizada('Categoria desactivada');
        return redirect()->route('category_list');
        }
/**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function active(Request $request)
    {
        //echo 'Está a punto de eliminar esta categoría, está seguro de querer hacerlo ?';
        //echo '';
        $category = Category::findOrFail($request->id);
        $category->fill(['active' => 1]);
        $category->save();
        // dd($category);
        // DB::table('categories')
        // ->where('id', $category->id)
        // ->update(['active' => $category]);

        //SweetAlertController::solicitudRealizada('Categoria desactivada');
        return redirect()->route('category_list');
        }


}

