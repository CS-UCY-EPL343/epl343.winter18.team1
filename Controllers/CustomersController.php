<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CUSTOMER = \DB::table('CUSTOMER')->get();
        return view('pages.customers', ['CUSTOMER'=>$CUSTOMER]);
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
        $list = \DB::table('CUSTOMER')->pluck('ID')->toArray();
        $fn1 = $list[count($list)-1] + 1;
        $fn2 = "cl";

        $ID = $fn1;

        $NAME = $req->input('NAME');
        $SURNAME = $req->input('SURNAME');
        $TELEPHONE = $req->input('TELEPHONE');
        $EMAIL = $req->input('EMAIL');
        $COMMENTS = $req->input('COMMENTS');
        
        $data = array('ID'=>$ID,'NAME'=>$NAME,'SURNAME'=>$SURNAME,'TELEPHONE'=>$TELEPHONE,'EMAIL'=>$EMAIL,'COMMENTS'=>$COMMENTS);

        \DB::table('CUSTOMER')->insert($data);


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
        $record = $req->input('ID1');
        $NAME = $req->input('NAME1');
        $SURNAME = $req->input('SURNAME1');
        $TELEPHONE = $req->input('TELEPHONE1');
        $EMAIL = $req->input('EMAIL1');
        $COMMENTS = $req->input('COMMENTS1');

        $data = array('NAME'=>$NAME,'SURNAME'=>$SURNAME,'TELEPHONE'=>$TELEPHONE,'EMAIL'=>$EMAIL,'COMMENTS'=>$COMMENTS);

        \DB::table('CUSTOMER')->where('ID',$record)->update($data);
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
        $record = $req->input('ID21');

        \DB::table('CUSTOMER')->where('ID',$record)->delete();
        return redirect()->back();
    }
}
