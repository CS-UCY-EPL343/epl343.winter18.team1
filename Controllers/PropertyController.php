<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $PROPERTY_PLOT = \DB::table('PROPERTY_PLOT', 'asc')->get();
        $images = \DB::table('image_gallery')->get();
       
        return view('pages.property', ['PROPERTY_PLOT' => $PROPERTY_PLOT, 'image_gallery' => $images]);

    }

    function upload(Request $request) {

        $this->validate($request, ['file' => 'required|image|mimes:jpeg,png,jpg,gif| max:2048']);
        $image=$request->file('file');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Security code to prevent addition of extra emails by spambots
        

    public function store(Request $req) {

         
       

        $CUSTOMER_ID = $req->input('CUSTOMER_ID');

        $flag = \DB::table('CUSTOMER')->where( 'ID', $CUSTOMER_ID)->count();
        if($flag==0){
            // return alert "apoel";
            $message = "Please enter an existing customer ID. ";
            return $message;
        }else {


        $list = \DB::table('PROPERTY_PLOT')->pluck('PROPERTY_ID')->toArray();
        //$fn1 = $list[count($list)-1] + 1;
       // $fn2 = "cl";
        

        $PROPERTY_ID = $req-> input('PROPERTY_ID');

        $flag0 = \DB::table('PROPERTY_PLOT')->where( 'PROPERTY_ID', $PROPERTY_ID)->count();
            if($flag0>0){
                // return alert "apoel";
                $message = "Please enter a unique property id. ";
                return $message;
            }else {

            $AVAILABLE_FOR = $req->input('AVAILABLE_FOR');
            $TYPE = $req->input('TYPE');
            $SUBTYPE = $req->input('SUBTYPE');
            $TOWN = $req->input('TOWN');
            $AREA = $req->input('AREA');
            $PRICE = $req->input('PRICE');
            $SQUARE_METERS = $req->input('SQUARE_METERS');
            $FLOORS = $req->input('FLOORS');
            $ROOMS = $req->input('ROOMS');
            $FURNISHED = $req->input('FURNISHED');
            $POOL = $req->input('POOL');
            //$PICTURE=$req->input('PICTURE');
            $DATE_SUBMITTED = $req->input('DATE_SUBMITTED1');
            
            if (empty($AREA)) {
                $message = "Area must not be empty";
                return $message;
            }else if(ctype_alpha(str_replace(' ', '', $AREA)) === false){
                $message = "Area must have only letters";
                return $message;
            }
            if (empty($PRICE)) {
                $message = "Price must not be empty";
                return $message;
            }
            if (empty($SQUARE_METERS)) {
                $message = "Square meters must not be empty";
                return $message;
            }
            if (empty($FLOORS)) {
                $message = "Floors must not be empty";
                return $message;
            }
            if (empty($ROOMS)) {
                $message = "Rooms meters must not be empty";
                return $message;
            }
              if (empty($DATE_SUBMITTED)) {
                $message = "Date submited field must not be empty";
                return $message;
            }
            if (strlen($AREA)>20) {
                $message = "Area must not exceeds 20 characters";
                return $message;
            }
            if (strlen($PRICE)>10) {
                $message = "Price must not exceeds 10 characters";
                return $message;
            }
            if (strlen($SQUARE_METERS)>10) {
                $message = "Square meters must not exceeds 10 characters";
                return $message;
            }
            if (strlen($FLOORS)>10) {
                $message = "Floors must not exceeds 10 characters";
                return $message;
            }
            if (strlen($ROOMS)>10) {
                $message = "Price must not exceeds 10 characters";
                return $message;
            }

            $data = array(
                'PROPERTY_ID'=> $PROPERTY_ID,
                'AVAILABLE_FOR'=>$AVAILABLE_FOR,
                'TYPE'=>$TYPE,
                'SUBTYPE'=>$SUBTYPE,
                'TOWN'=>$TOWN,
                'AREA'=>$AREA,     
                'PRICE'=>$PRICE, 
                'SQUARE_METERS'=>$SQUARE_METERS,
                'FLOORS'=>$FLOORS, 
                'ROOMS'=>$ROOMS, 
                'FURNISHED'=>$FURNISHED,
                'POOL'=>$POOL,   
                'DATE_SUBMITTED' => $DATE_SUBMITTED, 
                //'PICTURE' => $PICTURE,  
                'CUSTOMER_ID' => $CUSTOMER_ID
            );
            

            \DB::table('PROPERTY_PLOT')->insert($data);

            return redirect()->back()->with('alert', 'Request submited!');

            }
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req){


        // $PROPERTY_ID = $req->input('PROPERTY_ID');
        $record = $req->input('PROPERTY_ID1');
        $AVAILABLE_FOR = $req->input('AVAILABLE_FOR1');
        $TYPE = $req->input('TYPE1');
        $SUBTYPE = $req->input('SUBTYPE1');
        $TOWN = $req->input('TOWN1');
        $AREA = $req->input('AREA1');
        $PRICE = $req->input('PRICE1');
        $SQUARE_METERS = $req->input('SQUARE_METERS1');
        $FLOORS = $req->input('FLOORS1');
        $ROOMS = $req->input('ROOMS1');
        $FURNISHED = $req->input('FURNISHED1');
        $POOL = $req->input('POOL1');
        $DATE_SUBMITTED = $req->input('DATE_SUBMITTED1');
       

        $CUSTOMER_ID = $req->input('CUSTOMER_ID1');

        $flag = \DB::table('CUSTOMER')->where( 'ID', $CUSTOMER_ID)->count();
        if($flag==0){
            // return alert "apoel";
            $message = "Please enter an existing customer ID. ";
            return $message;
        }else {

  if (empty($AREA)) {
            $message = "Area must not be empty";
            return $message;
        }else if(ctype_alpha(str_replace(' ', '', $AREA)) === false){
            $message = "Area must have only letters";
            return $message;
        }
        if (empty($PRICE)) {
            $message = "Price must not be empty";
            return $message;
        }
        if (empty($SQUARE_METERS)) {
            $message = "Square meters must not be empty";
            return $message;
        }
        if (empty($FLOORS)) {
            $message = "Floors must not be empty";
            return $message;
        }
        if (empty($ROOMS)) {
            $message = "Rooms meters must not be empty";
            return $message;
        }
          if (empty($DATE_SUBMITTED)) {
            $message = "Date submited field must not be empty";
            return $message;
        }
        if (strlen($AREA)>20) {
            $message = "Area must not exceeds 20 characters";
            return $message;
        }
        if (strlen($PRICE)>10) {
            $message = "Price must not exceeds 10 characters";
            return $message;
        }
        if (strlen($SQUARE_METERS)>10) {
            $message = "Square meters must not exceeds 10 characters";
            return $message;
        }
        if (strlen($FLOORS)>10) {
            $message = "Floors must not exceeds 10 characters";
            return $message;
        }
        if (strlen($ROOMS)>10) {
            $message = "Price must not exceeds 10 characters";
            return $message;
        }

        $data = array(
        // 'PROPERTY_ID'=>$PROPERTY_ID,
        'PROPERTY_ID'=>$record,
        'AVAILABLE_FOR'=>$AVAILABLE_FOR,
        'TYPE'=>$TYPE,
        'SUBTYPE'=>$SUBTYPE,
        'TOWN'=>$TOWN,
        'AREA'=>$AREA,
        'PRICE'=>$PRICE,
        'SQUARE_METERS'=>$SQUARE_METERS,
        'FLOORS'=>$FLOORS,
        'ROOMS'=>$ROOMS,
        'FURNISHED'=>$FURNISHED,
        'POOL'=>$POOL,
        'DATE_SUBMITTED'=>$DATE_SUBMITTED,
        'CUSTOMER_ID'=>$CUSTOMER_ID 
        );

        \DB::table('PROPERTY_PLOT')->where('PROPERTY_ID',$record)->update($data);
        return redirect()->back();


    }

    }

      public function store_image(Request $request)

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $record = $req->input('PROPERTY_ID21');

        \DB::table('PROPERTY_PLOT')->where('PROPERTY_ID',$record)->delete();
        return redirect()->back();
    }

    public function destroy_image($id)

    {

        ImageGallery::find($id)->delete();

        return back()->with('success','Image removed successfully.');   

    }
}
