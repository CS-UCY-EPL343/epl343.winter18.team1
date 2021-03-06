<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EMPLOYEE = \DB::table('EMPLOYEE')->get();
        return view('pages.employees', ['EMPLOYEE'=>$EMPLOYEE]);
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
        $list = \DB::table('EMPLOYEE')->pluck('EMPLOYEE_ID')->toArray();
        $fn1 = $list[count($list)-1] + 1;
        $fn2 = "cl";

        $EMPLOYEE_ID = $fn1;

        $NAME = $req->input('NAME');
        $SURNAME = $req->input('SURNAME');
        $TELEPHONE = $req->input('TELEPHONE');
        $EMAIL = $req->input('EMAIL');
        $SALARY= $req->input('SALARY');
        $ADDRESS=$req->input('ADDRESS');
        
        $data = array('EMPLOYEE_ID'=>$EMPLOYEE_ID,'NAME'=>$NAME,'SURNAME'=>$SURNAME,'TELEPHONE'=>$TELEPHONE,'EMAIL'=>$EMAIL,'SALARY'=>$SALARY,'ADDRESS'=>$ADDRESS);

        \DB::table('EMPLOYEE')->insert($data);


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
        $record = $req->input('EMPLOYEE_ID1');
        $NAME = $req->input('NAME1');
        $SURNAME = $req->input('SURNAME1');
        $TELEPHONE = $req->input('TELEPHONE1');
        $EMAIL = $req->input('EMAIL1');
         $SALARY= $req->input('SALARY1');
        $ADDRESS=$req->input('ADDRESS1');

        $data = array('NAME'=>$NAME,'SURNAME'=>$SURNAME,'TELEPHONE'=>$TELEPHONE,'EMAIL'=>$EMAIL,'SALARY'=>$SALARY,'ADDRESS'=>$ADDRESS);

        \DB::table('EMPLOYEE')->where('EMPLOYEE_ID',$record)->update($data);
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
        $record = $req->input('Empid21');

        \DB::table('EMPLOYEE')->where('EMPLOYEE_ID',$record)->delete();
        return redirect()->back();
    }
}
