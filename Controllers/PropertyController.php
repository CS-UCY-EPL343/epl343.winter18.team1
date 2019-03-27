<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $PROPERTY_PLOT = \DB::table('PROPERTY_PLOT', 'asc')->get();

       
        return view('pages.property', ['PROPERTY_PLOT' => $PROPERTY_PLOT]);

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
            return redirect()->back() ->with('message', 'Please enter an existing customer ID. ');


            //return alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
        

        }else {


        $list = \DB::table('PROPERTY_PLOT')->pluck('PROPERTY_ID')->toArray();
        //$fn1 = $list[count($list)-1] + 1;
       // $fn2 = "cl";
        
        $PROPERTY_ID = $req-> input('PROPERTY_ID');
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
        $PICTURE=$req->input('PICTURE');
        $DATE_SUBMITTED = $req->input('DATE_SUBMITTED');
       
        
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
            'PICTURE' => $PICTURE,  
            'CUSTOMER_ID' => $CUSTOMER_ID
        );
        

        \DB::table('PROPERTY_PLOT')->insert($data);

        return redirect()->back()->with('alert', 'Request submited!');

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
    public function update(Request $req)
    {     
        $PROPERTY_ID = $req->input('PROPERTY_ID');
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
        $DATE_SUBMITTED = $req->input('DATE_SUBMITTED');
        $PICTURE = $req->input('PICTURE');
        $CUSTOMER_ID = $req->input('CUSTOMER_ID');

        $data = array(
        'PROPERTY_ID'=>$PROPERTY_ID,
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
        'PICTURE'=>$PICTURE,
        'CUSTOMER_ID'=>$CUSTOMER_ID 
        );

        \DB::table('PROPERTY_PLOT')->where('PROPERTY_ID',$PROPERTY_ID)->update($data);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $PROPERTY_ID = $req->input('PROPERTY_ID');

        \DB::table('PROPERTY_PLOT')->where('PROPERTY_ID',$PROPERTY_ID)->delete();
        return redirect()->back();
    }
}