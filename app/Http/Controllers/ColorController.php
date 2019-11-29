<?php

namespace App\Http\Controllers;

use App\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors= Color::all();
        $title = 'Listado de Colores';
        return view('color_list')->with('colors', Color::all())->with('title', 'Listado de Colores') ;

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
                ['color_name'=>'required'],
                ['color_name.required'=>'Debe ingresar el Nombre']);
            $color = new Color($request->all());
            $color->save();

            return redirect('color_create');
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
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $id)
    {    $colors = Color::all();
         $color = Color::findOrFail($id);

          return view('color_edit')->with('color', $id) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $color = Color::findOrFail($request->id);
        $color->color_name =  $request->get('colorName');
        $color->save();

        return redirect()->route('color_list');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $color = Color::findOrFail($request->id);
        $color->fill(['active' => 0]);
        $color->save();
        return redirect()->route('color_list');
        }

    public function active(Request $request)
    {
        $color = Color::findOrFail($request->id);
        $color->fill(['active' => 1]);
        $color->save();
        return redirect()->route('color_list');
        }


}

