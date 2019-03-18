<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
                return view('search.ServiceCity');

                $users = DB::table('users')->get();

                return view('user.index', ['users' => $users]);
        */
        $PROPERTY_PLOT = \DB::table('PROPERTY_PLOT')->get();
        return view('pages.property', ['PROPERTY_PLOT' => $PROPERTY_PLOT]);


    }


    public function process(Request $request){

      $list = \DB::table('PROPERTY_PLOT')->pluck('PROPERTY_ID')->toArray();

      $INTERESTED_FOR = $request->input('INTERESTED_FOR');
      $TOWN = $request->input('TOWN');
      $AREA = $request->input('AREA');
      $TYPE = $request->input('TYPE');
      $SUBTYPE = $request->input('SUBTYPE');
      $FURNISHED = $request->input('FURNISHED');
      $ROOMS = $request->input('ROOMS');

        /*???*/
      $MIN_PRICE = $request->input('MIN_PRICE');
      $MAX_PRICE = $request->input('MAX_PRICE');

   
   /**** TESTING 

    $PROPERTY_PLOT = DB::table('PROPERTY_PLOT')
                    ->where($TOWN, 'TOWN' )                    
                    ->orWhere($AREA, 'AREA')
                    ->orWhere($TYPE, 'TYPE')
                    ->orWhere($SUBTYPE, 'SUBTYPE')
                    ->orWhere($FURNISHED, 'FURNISHED')
                    ->orWhere($ROOMS, 'ROOMS')
                    ->get();


    */
 if ($INTERESTED_FOR == 'Buy')
         $PROPERTY_PLOT = DB::table('PROPERTY_PLOT')->where([
            ['AVAILABLE_FOR', '=', 'For Sale'],
            ['TOWN', '=', $TOWN],
            ['AREA', '=', $AREA],
            ['TYPE', '=', $TYPE],
            ['SUBTYPE', '=', $SUBTYPE],
            ['FURNISHED', '=', $FURNISHED],
            ['ROOMS', '=', $ROOMS],
            ['PRICE', '>=', $MIN_PRICE],
            ['PRICE', '<=', $MAX_PRICE],
            ])->get();
    else if($INTERESTED_FOR == 'Rent')
          $PROPERTY_PLOT = DB::table('PROPERTY_PLOT')->where([
            ['AVAILABLE_FOR', '=', 'For Rent'],
            ['TOWN', '=', $TOWN],
            ['AREA', '=', $AREA],
            ['TYPE', '=', $TYPE],
            ['SUBTYPE', '=', $SUBTYPE],
            ['FURNISHED', '=', $FURNISHED],
            ['ROOMS', '>=', $ROOMS],
            ['PRICE', '>=', $MIN_PRICE],
            ['PRICE', '<=', $MAX_PRICE],
            ])->get();

    /** MIN_PRICE<PRICE<MAX_PRICE
      
      $properties = DB::table('PROPERTY_PLOT')
                    ->whereBetween('PRICE', array($MIN_PRICE, $MAX_PRICE))->get();  


    */
        
      /*View Results*/                           
      return view(search.result, compact('AVAILABLE_FOR',
        'TOWN', 
        'AREA',
        'TYPE', 
        'SUBTYPE', 
        'FURNISHED', 
        'ROOMS',
        'MIN_PRICE', 
        'MAX_PRICE' ));


    }

    public function search(Request $request)
   {
     
      if($request->ajax()){
   
        $output="";
        $products = Product::where('title','LIKE','%'.$request->search."%")->get();
        
        if($products){
     
           foreach ($products as  $product) {
           
            $output.='<tr>'.
            
            '<td>'.$product->id.'</td>'.
            
            '<td>'.$product->title.'</td>'.
            
            '<td>'.$product->description.'</td>'.
            
            '<td>'.$product->price.'</td>'.
            
            '</tr>';
        
           }
           return $output;  
        }


     public function result(Request  $req)
    {
        /*
        $Availablefor = $Availablefor->newQuery();

        // Search for a user based on their name.
        if ($req->has('Buy')) {
            $Availablefor->where('Buy', $req->input('Buy'));
        }else if ($req ->has ('Rent')){
            $Availablefor->where('Rent',$req->input('Rent'));

        }
        $Town = $Town->newQuery();
         if ($req -> has ())
		*/

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
        

    public function store(Request $req)
    {
        $list = \DB::table('PROPERTY')->pluck('PROPERTY ID')->toArray();
        $fn1 = $list[count($list)-1] + 1;
        $fn2 = "cl";

        $PROPERTY ID = $fn1;

        $PRICE = $req->input('PRICE');
        $LOCATION = $req->input('LOCATION');
        $DATE_SUBMITTED = $req->input('DATE SUBMITTED');
        $PICTURE = $req->input('PICTURE');
        $TYPE = $req->input('TYPE');
        $CUSTOMER_ID = $req->input('CUSTOMER_ID');
        
        
        $data = array('PROPERTY ID'=>$PROPERTY ID,
        			  'PRICE'=>$PRICE,
        			  'LOCATION'=>$LOCATION,
        			  'DATE SUBMITTED' => $req->input('DATE SUBMITTED'),
        			   'PICTURE' => $req->input('PICTURE'),
        			   'TYPE' => $req->input('TYPE'),
       					'CUSTOMER_ID' => $req->input('CUSTOMER_ID');
        
        
        			);

        \DB::table('PROPERTY_PLOT')->insert($data);


        //if "email" variable is filled out, send email
        // if (isset($_REQUEST['EMAIL']))  {
          
        function remove_headers($string) {
        $headers = array(
            "/to\:/i",
            "/from\:/i",
            "/bcc\:/i",
            "/cc\:/i",
            "/Content\-Transfer\-Encoding\:/i",
            "/Content\-Type\:/i",
            "/Mime\-Version\:/i"
            );
            if (preg_replace($headers, '', $string) == $string) {
            return $string;
            } else {
            die('You are not completing the form correctly.');
            }
        }

        return redirect()->back()->with('alert', 'Request submited!');
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
        $record = $req->input('PROPERTY_ID');
        $PRICE = $req->input('PRICE');
        $LOCATION = $req->input('LOCATION');
        $DATE SUBMITTED = $req->input('DATE SUBMITTED');
        $PICTURE = $req->input('PICTURE');
        $TYPE = $req->input('TYPE');
        $CUSTOMER_ID = $req->input('CUSTOMER_ID');
        $data = array('DOCUMENT'=>$DOCUMENT,'POSITION'=>$POSITION);

        \DB::table('PROPERTY_PLOT')->where('PROPERTY ID',$record)->update($data);
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
        $record = $req->input('PROPERTY ID');

        \DB::table('PROPERTY_PLOT')->where('PROPERTY ID',$record)->delete();
        return redirect()->back();
    }
}
