<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes= Size::all();
        $title = 'Listado de Talles';
        return view('size_list')->with('sizes', Size::all())->with('title', 'Listado de Talles') ;

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
                ['size_name'=>'required'],
                ['size_name.required'=>'Debe ingresar el Nombre']);
            $size = new Size($request->all());
            $size->save();

            return redirect('size_create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(size $id)
    {    $sizes = Size::all();
         $size = Size::findOrFail($id);

          return view('size_edit')->with('size', $id) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $size = Size::findOrFail($request->id);
        $size->size_name =  $request->get('sizeName');
        $size->save();

        return redirect()->route('size_list');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $size = Size::findOrFail($request->id);
        $size->fill(['active' => 0]);
        $size->save();
        return redirect()->route('size_list');
        }

    public function active(Request $request)
    {
        $size = Size::findOrFail($request->id);
        $size->fill(['active' => 1]);
        $size->save();
        return redirect()->route('size_list');
        }


}

