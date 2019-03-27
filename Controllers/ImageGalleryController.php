<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ImageGallery;
use View;

class ImageGalleryController extends Controller
{
    /**

     * Listing Of images gallery

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        //$images = App\ImageGallery::all();
    	//$images = ImageGallery::get();

    	//return view('images',compact('images'));

        $images = \DB::table('image_gallery')->get();
        return view('pages.image-gallery', ['image_gallery' => $images]);



    }


    /**

     * Upload image function

     *

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

    	$this->validate($request, [

    		'title' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $input['image'] = "images/" .  $request->image->getClientOriginalName();
        $input['title'] = $request->title;

        \DB::table('image_gallery')->insert($input);

        $request->file('image')->move(public_path("/images"), $input['image']);

        return redirect()->back()->with('alert', 'Request submited!');
    

    }


// public function store(Request $request)
// {
//     $file = $request->file('file');
//     $ext = $file->time().'.'.$request->image->getClientOriginalExtension();
//     $name = str_random(20).'.'.$ext ;
//     list($width, $height) = getimagesize($file);
//     $path = Storage::disk('public')->putFileAs(
//         'uploads', $file, $name
//     );
//     if($path){
//         $create = Auth::user()->photos()->create([
//             'uri' => $path,
//             'public' => false,
//             'height' => $height,
//             'width' => $width
//         ]);
 
//         if($create){
//             return response()->json([
//                 'uploaded' => true
//             ]);
//         }
//     }
// }

    /**

     * Remove Image function

     *

     * @return \Illuminate\Http\Response

     */


    public function destroy($id)

    {

    	ImageGallery::find($id)->delete();

    	return back()

    		->with('success','Image removed successfully.');	

    }
}
