<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function upload()
    // {
    //     public function uploadForm()
    // {
    //     return view('upload_form');
    // }

    // public function uploadSubmit(UploadRequest $request)
    // {
    //     // Coming soon...
    // }




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
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(image $image)
    {
        $image =  Image::find($id);
        $product = $image->product_id;
        // $image->active = (0);/
        // $image->save();
//$product->delete();//Hay que cambiar esto por el cambio del boolean 'active' por cero
        return redirect()->route('product_edit',['id'=>$product]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $id)
    {
        $image =  Image::find($id);
        $image->delete();
    }


    public function productImageDestroy($id){
      $image =  Image::find($id);
      $product = $image->product_id;
      $image->active = (0);
      $image->save();
      //$product->delete();//Hay que cambiar esto por el cambio del boolean 'active' por cero
      return redirect()->route('product_edit',['id'=>$product]);
    }

    public function productImageStore(Request $request){
        $image_file = $request->file('file');
        $imageName = $image_file->getClientOriginalName();
        $image_file->move(public_path('storage/images/products'),$imageName);

        $image = new Image();
        $image->image_name = $imageName;
        $image->product_id = $request->id;

        if( $image->save() ) {
            return response()->json(['success' => 'success'], 200);
        } else {
            return response()->json(['error' => 'invalid'], 400);
        }
    }
}
