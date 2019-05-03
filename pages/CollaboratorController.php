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
        // $list = \DB::table('COLLABORATOR')->pluck('NoLicense')->toArray();
        $NoLicense = $req->input('NoLicense');

        $flag = \DB::table('COLLABORATOR')->where( 'NoLicense', $NoLicense)->count();
        if($flag>0){
            $message = "Please enter a new collaborator's License Number. ";
            return $message;
        }else {
     /*   $fn1 = $list[count($list)-1] + 1;
        $fn2 = "cl";
        $NoLicense = $fn1;*/
        $NoLicense = $req -> input ('NoLicense');
        $NAME = $req->input('NAME');
        $SURNAME =$req->input('SURNAME');
        $ADDRESS= $req->input('ADDRESS');
        $EMAIL = $req->input('EMAIL');
        $PHONENUMBER = $req->input('PHONENUMBER');


        if (empty($NAME)) {
            $message = "First Name must not be empty";
            return $message;
        }else if(ctype_alpha(str_replace(' ', '', $NAME)) === false){
            $message = "First Name must have only letters";
            return $message;
        }
          if (empty($SURNAME)) {
            $message = "Surname must not be empty";
            return $message;
        }else if(ctype_alpha(str_replace(' ', '', $SURNAME)) === false){
            $message = "Surname must have only letters";
            return $message;
        }

         if (empty($ADDRESS)) {
            $message = "Address must not be empty";
            return $message;
        }

        if (empty($EMAIL)) {
            $message = "Email must not be empty";
            return $message;
       } else if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email address format";
           return $message;
        }

         if (empty($PHONENUMBER)) {
            $message = "Phone number must not be empty";
            return $message;
        }

        if (strlen($NAME)>20) {
            $message = "First Name must not exceeds 20 characters";
            return $message;
        }

        if (strlen($SURNAME)>20) {
            $message = "Surname must not exceeds 20 characters";
            return $message;
        }

        if (strlen($ADDRESS)>50) {
            $message = "Address  must not exceeds 50 characters";
            return $message;
        }

        if (strlen($PHONENUMBER)>18) {
            $message = "Phone number must not exceeds 18 digits";
            return $message;
        }

        if (strlen($EMAIL)>50) {
            $message = "Email must not exceeds 50 characters";
            return $message;
        }

        $data = array('NoLicense'=>$NoLicense,'NAME'=>$NAME,'SURNAME'=>$SURNAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL, 'PHONENUMBER'=>$PHONENUMBER);

        \DB::table('COLLABORATOR')->insert($data);


        //if "email" variable is filled out, send email
        // if (isset($_REQUEST['EMAIL']))  {
        
        return redirect()->back()->with('alert', 'Form submited!');
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
        $record = $req->input('NoLicense1');
        $NAME = $req->input('NAME1');
        $SURNAME = $req->input('SURNAME1');
        $ADDRESS = $req->input('ADDRESS1');
        $EMAIL = $req->input('EMAIL1');
        $PHONENUMBER = $req->input('PHONENUMBER1');
    
        if (empty($NAME)) {
            $message = "First Name must not be empty";
            return $message;
        }else if(ctype_alpha(str_replace(' ', '', $NAME)) === false){
            $message = "First Name must have only letters";
            return $message;
        }
          if (empty($SURNAME)) {
            $message = "Surname must not be empty";
            return $message;
        }else if(ctype_alpha(str_replace(' ', '', $SURNAME)) === false){
            $message = "Surname must have only letters";
            return $message;
        }

         if (empty($ADDRESS)) {
            $message = "Address must not be empty";
            return $message;
        }

        if (empty($EMAIL)) {
            $message = "Email must not be empty";
            return $message;
       } else if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email address format";
           return $message;
        }

         if (empty($PHONENUMBER)) {
            $message = "Phone number must not be empty";
            return $message;
        }

        if (strlen($NAME)>20) {
            $message = "First Name must not exceeds 20 characters";
            return $message;
        }

        if (strlen($SURNAME)>20) {
            $message = "Surname must not exceeds 20 characters";
            return $message;
        }

        if (strlen($ADDRESS)>50) {
            $message = "Address  must not exceeds 50 characters";
            return $message;
        }

        if (strlen($PHONENUMBER)>18) {
            $message = "Phone number must not exceeds 18 digits";
            return $message;
        }

        if (strlen($EMAIL)>50) {
            $message = "Email must not exceeds 50 characters";
            return $message;
        }

        

        $data = array('NoLicense'=>$record, 'NAME'=>$NAME,'SURNAME'=>$SURNAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL,'PHONENUMBER'=>$PHONENUMBER);

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
        $record = $req->input('NoLicense21');

        \DB::table('COLLABORATOR')->where('NoLicense',$record)->delete();
        return redirect()->back();
    }
}
