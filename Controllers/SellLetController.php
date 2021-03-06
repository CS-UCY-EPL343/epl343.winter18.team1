<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\SLNotification;
use App\BRNotification;
use App\CNotification;
use View;


class SellLetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = SLNotification::orderBy('ID', 'desc')->get();
        $sr = BRNotification::orderBy('ID', 'desc')->get();
        $c = CNotification::orderBy('ID', 'desc')->get();

        return view('pages.notifications', ['SELL_LET' => $posts, 'SELL_RENT'=>$sr, 'CONTACT'=> $c]);
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
        $list = \DB::table('SELL_LET')->pluck('ID')->toArray();
        $fn2 = "sl";
        if(empty($list)){
            $fn1 = "1";
            $ID = $fn1;
            $FORM_NO = $fn2 . $fn1;
        }else{
            $fn1 = $list[count($list)-1] + 1;
            $ID = $fn1;
            $FORM_NO = $fn2 . $fn1;
        }

        $PROPERTY_ID = $req->input('PROPERTY_ID');
        $FIRST_NAME = $req->input('FIRST_NAME');
        $LAST_NAME = $req->input('LAST_NAME');
        $ADDRESS = $req->input('ADDRESS');
        $EMAIL = $req->input('EMAIL');
        $TELEPHONE = $req->input('TELEPHONE');
        $MESSAGE = $req->input('MESSAGE');

        // remove numbers from string
        $FIRST_NAME = preg_replace('/\d+/u', '', $FIRST_NAME);
        $LAST_NAME = preg_replace('/\d+/u', '', $LAST_NAME);

        // remove all non-numeric characters from string
        $TELEPHONE = preg_replace('/[^0-9]/', '', $TELEPHONE);

        if (empty($FIRST_NAME)) {
            $message = "First Name field must not be empty";
            return response()->json($message);
        }else if(ctype_alpha(str_replace(' ', '', $FIRST_NAME)) === false){
            $message = "First Name field must have only letters";
            return response()->json($message);
        }

        if (empty($ADDRESS)) {
            $message = "Address field must not be empty";
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

        if (strlen($ADDRESS)>40) {
            $message = "Address field must not exceeds 40 characters";
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

        $s = 0;
        if($req->input('SELL') == 1)
            $s = 1;
        $SELL = $s;
        $l = 0;
        if($req->input('LET') == 1)
            $l = 1;
        $LET = $l;
        
        $data = array('ID'=>$ID,'FORM_NO'=>$FORM_NO,'PROPERTY_ID'=>$PROPERTY_ID,'FIRST_NAME'=>$FIRST_NAME,'LAST_NAME'=>$LAST_NAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL,'TELEPHONE'=>$TELEPHONE,'MESSAGE'=>$MESSAGE,'SELL'=>$SELL,'LET'=>$LET);

        \DB::table('SELL_LET')->insert($data);

          
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
        $address = ($_POST['ADDRESS']);
        $phone = ($_POST['TELEPHONE']);
        $property = ($_POST['PROPERTY_ID']);
        $wordcount = str_word_count($message);

        if($SELL==1)
            $sell = stripslashes("SELL");
        else $sell = stripslashes("NOT SELL");

        if($LET==1)
            $let = stripslashes("LET");
        else $let = stripslashes("NOT LET");
              
            //send email
        mail($admin_email, "Subject: ($sell) and ($let)", "First Name: $name\nLast Name: $surname\nAddress: $address\nPhone: $phone\nProperty Type: $property\nInterested for: ($sell) & ($let)\nSubmission Code: $fnum\n\nMessage:\n-------------------\n$message", "From: $email");

        mail( $email, "Feedback for contacting", $replymsg , "From: $admin_email" );
          
        // $post = SLNotification::findOrFail($ID);
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
        $post = SLNotification::findOrFail($id);
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
        $ADDRESS = $req->input('address');
        $EMAIL = $req->input('email');
        $TELEPHONE = $req->input('telephone');
        $MESSAGE = $req->input('message');

        $FIRST_NAME = preg_replace('/\d+/u', '', $FIRST_NAME);
        $LAST_NAME = preg_replace('/\d+/u', '', $LAST_NAME);
        $TELEPHONE = preg_replace("/[^0-9]/", "", $TELEPHONE);


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

        if (empty($ADDRESS)) {
            $message = "Address field must not be empty";
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

        if (strlen($ADDRESS)>40) {
            $message = "Address field must not exceeds 40 characters";
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


        $s = 0;
        if($req->input('sell') == 1)
            $s = 1;
        $SELL = $s;
        $l = 0;
        if($req->input('let') == 1)
            $l = 1;
        $LET = $l;

        $data = array('ID'=>$record, 'FIRST_NAME'=>$FIRST_NAME,'LAST_NAME'=>$LAST_NAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL,'TELEPHONE'=>$TELEPHONE,'MESSAGE'=>$MESSAGE,'SELL'=>$SELL,'LET'=>$LET);

        \DB::table('SELL_LET')->where('ID',$record)->update($data);
        
        $post = SLNotification::findOrFail($record);

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
        $post = SLNotification::findOrFail($req);
        $record = $req->input('id');
        \DB::table('SELL_LET')->where('ID',$record)->delete();
        return response()->json($post);
    }
}