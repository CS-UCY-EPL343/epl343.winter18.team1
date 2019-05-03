<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\CNotification;
use View;


class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact-us_new');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $ID = "1";
        $FORM_NO = "1";
        $list = \DB::table('CONTACT')->pluck('ID')->toArray();
        $fn2 = "cd";
        if(empty($list)){
            $fn1 = "1";
            $ID = $fn1;
            $FORM_NO = $fn2 . $fn1;
        }else{
            $fn1 = $list[count($list)-1] + 1;
            $ID = $fn1;
            $FORM_NO = $fn2 . $fn1;
        }

        $FIRST_NAME = $req->input('FIRST_NAME');
        $LAST_NAME = $req->input('LAST_NAME');
        $EMAIL = $req->input('EMAIL');
        $TELEPHONE = $req->input('TELEPHONE');
        $MESSAGE = $req->input('MESSAGE');

        if (empty($FIRST_NAME)) {
            $message = "First Name field must not be empty";
            return response()->json($message);
        }else if(ctype_alpha(str_replace(' ', '', $FIRST_NAME)) === false){
            $message = "First Name field must have only letters";
            return response()->json($message);
        }

        // check if input field is empty
        if (empty($LAST_NAME)) {
            $message = "Last Name field must not be empty";
            return response()->json($message);
        }
        // check if input field has white characters (space)
        else if(ctype_alpha(str_replace(' ', '', $LAST_NAME)) === false){
            $message = "Last Name field must have only letters";
            return response()->json($message);
        }

        // check if input field is empty and if it contains only integer numbers
        if (empty($TELEPHONE) && is_int($TELEPHONE)) {
            $message = "Telephone field must not be empty";
            return response()->json($message);
        }

        // check if input field is empty
        if (empty($EMAIL)) {
            $message = "Email address must not be empty";
            return response()->json($message);
        } 
        // check if input field has valid email format
        else if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email address format";
            return response()->json($message);
        }

        // check if the legnth of the input field exceeds 20 characters
        if (strlen($FIRST_NAME)>20) {
            $message = "First Name field must not exceeds 20 characters";
            return response()->json($message);
        }

        if (strlen($LAST_NAME)>20) {
            $message = "Last Name field must not exceeds 20 characters";
            return response()->json($message);
        }

        if (strlen($TELEPHONE)>18) {
            $message = "Telephone must not exceeds 18 digits";
            return response()->json($message);
        }

        if (strlen($EMAIL)>40) {
            $message = "Email must not exceeds 40 characters";
            return response()->json($message);
        }


        
        $data = array('ID'=>$ID,'FORM_NO'=>$FORM_NO,'FIRST_NAME'=>$FIRST_NAME,'LAST_NAME'=>$LAST_NAME,'EMAIL'=>$EMAIL,'TELEPHONE'=>$TELEPHONE,'MESSAGE'=>$MESSAGE);

        \DB::table('CONTACT')->insert($data);
          
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
        //Email information
        $replymsg = 'Thank you for your email. We will respond shortly.' ;
        $admin_email = "amagirou@gmail.com";
        $email = remove_headers($_POST['EMAIL']);
        $fnum = stripslashes($FORM_NO);
        $message = remove_headers($_POST['MESSAGE']);
        $name = remove_headers($_POST['FIRST_NAME']);
        $surname = remove_headers($_POST['LAST_NAME']);
        $phone = ($_POST['TELEPHONE']);
        $wordcount = str_word_count($message);

              
            //send email
        mail($admin_email, "Contact Form: $name $surname", "First Name: $name\nLast Name: $surname\nPhone: $phone\nSubmission Code: $fnum\n\nMessage:\n-------------------\n$message", "From: $email");

        mail( $email, "Feedback for contacting", $replymsg , "From: $admin_email" );
          
        return response()->json();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = CNotification::findOrFail($id);
        return view('post.show', ['post' => $post]);
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
        $record = $req->input('id');
        $FIRST_NAME = $req->input('first_name');
        $LAST_NAME = $req->input('last_name');
        $EMAIL = $req->input('email');
        $TELEPHONE = $req->input('telephone');
        $MESSAGE = $req->input('message');

        $FIRST_NAME = preg_replace('/\d+/u', '', $FIRST_NAME);
        $LAST_NAME = preg_replace('/\d+/u', '', $LAST_NAME);

        if (empty($FIRST_NAME)) {
            $message = "First Name field must not be empty";
            return response()->json($message);
        }else if(ctype_alpha(str_replace(' ', '', $FIRST_NAME)) === false){
            $message = "First Name field must have only letters";
            return response()->json($message);
        }

        if (empty($LAST_NAME)) {
            $message = "Last Name field must not be empty";
            return response()->json($message);
        }else if(ctype_alpha(str_replace(' ', '', $LAST_NAME)) === false){
            $message = "Last Name field must have only letters";
            return response()->json($message);
        }

        if (empty($TELEPHONE) && is_int($TELEPHONE)) {
            $message = "Telephone field must not be empty";
            return response()->json($message);
        }

        if (empty($EMAIL)) {
            $message = "Email address must not be empty";
            return response()->json($message);
        } else if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email address format";
            return response()->json($message);
        }

        if (strlen($FIRST_NAME)>20) {
            $message = "First Name field must not exceeds 20 characters";
            return response()->json($message);
        }

        if (strlen($LAST_NAME)>20) {
            $message = "Last Name field must not exceeds 20 characters";
            return response()->json($message);
        }

        if (strlen($TELEPHONE)>18) {
            $message = "Telephone must not exceeds 18 digits";
            return response()->json($message);
        }

        if (strlen($EMAIL)>40) {
            $message = "Email must not exceeds 40 characters";
            return response()->json($message);
        }


        $data = array('ID'=>$record, 'FIRST_NAME'=>$FIRST_NAME,'LAST_NAME'=>$LAST_NAME,'EMAIL'=>$EMAIL,'TELEPHONE'=>$TELEPHONE,'MESSAGE'=>$MESSAGE);

        \DB::table('CONTACT')->where('ID',$record)->update($data);
        $post = CNotification::findOrFail($record);
        
        return response()->json($post);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $post = CNotification::findOrFail($req);
        $record = $req->input('id');
        \DB::table('CONTACT')->where('ID',$record)->delete();
        return response()->json($post);
    }
}