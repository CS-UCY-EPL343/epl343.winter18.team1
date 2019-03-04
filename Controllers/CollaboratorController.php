<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $COLLABORATOR = \DB::table('COLLABORATOR')->get();
        return view('pages.collaborators', ['COLLABORATOR'=>$COLLABORATOR]);
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
        $list = \DB::table('COLLABORATOR')->pluck('NoLicense')->toArray();
        $fn1 = $list[count($list)-1] + 1;
        $fn2 = "cl";

        $NoLicense = $fn1;

        $NAME = $req->input('NAME');
        $SURNAME =$req->input('SURNAME');
        $ADDRESS= $req->input('ADDRESS');
        $EMAIL = $req->input('EMAIL');
        $PHONENUMBER = $req->input('PHONENUMBER');
        
        $data = array('NoLicense'=>$NoLicense,'NAME'=>$NAME,'SURNAME'=>$SURNAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL, 'PHONENUMBER'=>$PHONENUMBER);

        \DB::table('COLLABORATOR')->insert($data);


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

        return redirect()->back()->with('alert', 'Form submited!');
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
        $record = $req->input('NoLicense');
        $NAME = $req->input('NAME');
        $SURNAME = $req->input('SURNAME');
        $ADDRESS = $req->input('ADDRESS');
        $EMAIL = $req->input('EMAIL');
        $PHONENUMBER = $req->input('PHONENUMBER');
        

        $data = array('NAME'=>$NAME,'SURNAME'=>$SURNAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL,'PHONENUMBER'=>$PHONENUMBER);

        \DB::table('COLLABORATOR')->where('NoLicense',$record)->update($data);
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
        $record = $req->input('NoLicense');

        \DB::table('COLLABORATOR')->where('NoLicense',$record)->delete();
        return redirect()->back();
    }
}
