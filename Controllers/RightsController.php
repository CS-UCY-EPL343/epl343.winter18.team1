<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $RIGHTS = \DB::table('RIGHTS')->get();
        return view('pages.rights', ['RIGHTS'=>$RIGHTS]);
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
        $list = \DB::table('RIGHTS')->pluck('RIGHT_ID')->toArray();
        $fn1 = $list[count($list)-1] + 1;
        $fn2 = "sl";
        $FORM_NO = $fn2 . $fn1;

        $ID = $fn1;

        $RIGHT_ID = $req->input('RIGHT_ID');

        $ADD_ARTICLE = $req->input('ADD_ARTICLE');
        $ADD_PROPERTY_PLOT = $req->input('ADD_PROPERTY_PLOT');
        $ADD_CUSTOMER = $req->input('ADD_CUSTOMER');
        $ADD_EMPLOYEE = $req->input('ADD_EMPLOYEE');
        $ADD_COLLABORATOR = $req->input('ADD_COLLABORATOR');
        $NOTIFICATIONS = $req->input('NOTIFICATIONS');
        $ACCOUNT_ID = $req->input('ACCOUNT_ID');

        $r1 = 0;
        if($req->input('ADD_ARTICLE') == 1)
            $r1= 1;
        $ADD_ARTICLE = $r1;
        $r2 = 0;
        if($req->input('ADD_PROPERTY_PLOT') == 1)
            $r2= 1;
        $ADD_PROPERTY_PLOT = $r2;
        $r3 = 0;
        if($req->input('ADD_CUSTOMER') == 1)
            $r3= 1;
        $ADD_CUSTOMER = $r3;
        $r4 = 0;
        if($req->input('ADD_EMPLOYEE') == 1)
            $r4= 1;
        $ADD_EMPLOYEE = $r4;
        $r5 = 0;
        if($req->input('ADD_COLLABORATOR') == 1)
            $r5= 1;
        $ADD_COLLABORATOR = $r5;
        $r6 = 0;
        if($req->input('NOTIFICATIONS') == 1)
            $r6= 1;
        $NOTIFICATIONS = $r6;


        $data = array('RIGHT_ID'=>$RIGHT_ID,'ADD_ARTICLE'=>$ADD_ARTICLE,'ADD_PROPERTY_PLOT'=>$ADD_PROPERTY_PLOT,'ADD_CUSTOMER'=>$ADD_CUSTOMER,'ADD_EMPLOYEE'=>$ADD_EMPLOYEE,'ADD_COLLABORATOR'=>$ADD_COLLABORATOR,'NOTIFICATIONS'=>$NOTIFICATIONS,'ACCOUNT_ID'=>$ACCOUNT_ID);

        \DB::table('RIGHTS')->insert($data);


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
        $record = $req->input('RIGHT_ID');
        $ADD_ARTICLE = $req->input('ADD_ARTICLE');
        $ADD_PROPERTY_PLOT = $req->input('ADD_PROPERTY_PLOT');
        $ADD_CUSTOMER = $req->input('ADD_CUSTOMER');
        $ADD_EMPLOYEE = $req->input('ADD_EMPLOYEE');
        $ADD_COLLABORATOR = $req->input('ADD_COLLABORATOR');
        $NOTIFICATIONS = $req->input('NOTIFICATIONS');

         $r1 = 0;
        if($req->input('ADD_ARTICLE') == 1)
            $r1= 1;
        $ADD_ARTICLE = $r1;
         $data = array('ADD_ARTICLE'=>$ADD_ARTICLE,'ADD_PROPERTY_PLOT'=>$ADD_PROPERTY_PLOT,'ADD_CUSTOMER'=>$ADD_CUSTOMER,'ADD_EMPLOYEE'=>$ADD_EMPLOYEE,'ADD_COLLABORATOR'=>$ADD_COLLABORATOR,'NOTIFICATIONS'=>$NOTIFICATIONS);

        \DB::table('RIGHTS')->where('RIGHT_ID',$record)->update($data);
        return redirect()->back();

       
        $r2 = 0;
        if($req->input('ADD_PROPERTY_PLOT') == 1)
            $r2= 1;
        $ADD_PROPERTY_PLOT = $r2;

        $data = array('ADD_ARTICLE'=>$ADD_ARTICLE,'ADD_PROPERTY_PLOT'=>$ADD_PROPERTY_PLOT,'ADD_CUSTOMER'=>$ADD_CUSTOMER,'ADD_EMPLOYEE'=>$ADD_EMPLOYEE,'ADD_COLLABORATOR'=>$ADD_COLLABORATOR,'NOTIFICATIONS'=>$NOTIFICATIONS);

        \DB::table('RIGHTS')->where('RIGHT_ID',$record)->update($data);
        return redirect()->back();

        $r3 = 0;
        if($req->input('ADD_CUSTOMER') == 1)
            $r3= 1;
        $ADD_CUSTOMER = $r3;

        $data = array('ADD_ARTICLE'=>$ADD_ARTICLE,'ADD_PROPERTY_PLOT'=>$ADD_PROPERTY_PLOT,'ADD_CUSTOMER'=>$ADD_CUSTOMER,'ADD_EMPLOYEE'=>$ADD_EMPLOYEE,'ADD_COLLABORATOR'=>$ADD_COLLABORATOR,'NOTIFICATIONS'=>$NOTIFICATIONS);

        \DB::table('RIGHTS')->where('RIGHT_ID',$record)->update($data);
        return redirect()->back();



        $r4 = 0;
        if($req->input('ADD_EMPLOYEE') == 1)
            $r4= 1;
        $ADD_EMPLOYEE = $r4;
        $data = array('ADD_ARTICLE'=>$ADD_ARTICLE,'ADD_PROPERTY_PLOT'=>$ADD_PROPERTY_PLOT,'ADD_CUSTOMER'=>$ADD_CUSTOMER,'ADD_EMPLOYEE'=>$ADD_EMPLOYEE,'ADD_COLLABORATOR'=>$ADD_COLLABORATOR,'NOTIFICATIONS'=>$NOTIFICATIONS);

        \DB::table('RIGHTS')->where('RIGHT_ID',$record)->update($data);
        return redirect()->back();



        $r5 = 0;
        if($req->input('ADD_COLLABORATOR') == 1)
            $r5= 1;
        $ADD_COLLABORATOR = $r5;
        $data = array('ADD_ARTICLE'=>$ADD_ARTICLE,'ADD_PROPERTY_PLOT'=>$ADD_PROPERTY_PLOT,'ADD_CUSTOMER'=>$ADD_CUSTOMER,'ADD_EMPLOYEE'=>$ADD_EMPLOYEE,'ADD_COLLABORATOR'=>$ADD_COLLABORATOR,'NOTIFICATIONS'=>$NOTIFICATIONS);

        \DB::table('RIGHTS')->where('RIGHT_ID',$record)->update($data);
        return redirect()->back();

        $r6 = 0;
        if($req->input('NOTIFICATIONS') == 1)
            $r6= 1;
        $NOTIFICATIONS = $r6;

        $data = array('ADD_ARTICLE'=>$ADD_ARTICLE,'ADD_PROPERTY_PLOT'=>$ADD_PROPERTY_PLOT,'ADD_CUSTOMER'=>$ADD_CUSTOMER,'ADD_EMPLOYEE'=>$ADD_EMPLOYEE,'ADD_COLLABORATOR'=>$ADD_COLLABORATOR,'NOTIFICATIONS'=>$NOTIFICATIONS);

        \DB::table('RIGHTS')->where('RIGHT_ID',$record)->update($data);
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
        $record = $req->input('RIGHT_ID');

        \DB::table('RIGHTS')->where('RIGHT_ID',$record)->delete();
        return redirect()->back();
    }
}
