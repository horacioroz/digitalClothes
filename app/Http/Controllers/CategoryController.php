<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        //dd($request->id);
        // $categories = Category::all();
        $category = Category::findOrFail($request->id);
        $category->category_name =  $request->get('categoryName');

        //dd($request->categoryName);
        //dd($category);
       // $category->update();
        $category->save();

        return redirect()->route('category_list');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
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
