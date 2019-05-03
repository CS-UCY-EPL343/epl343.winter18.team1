<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\SLNotification;
use App\BRNotification;
use View;


class BuyRentController extends Controller
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

        return view('pages.notifications', ['SELL_LET' => $posts, 'SELL_RENT'=>$sr]);
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
        $FORM_ID = "1";
        $list = \DB::table('SELL_RENT')->pluck('ID')->toArray();
        $fn2 = "sr";
        if(empty($list)){
            $fn1 = "1";
            $ID = $fn1;
            $FORM_ID = $fn2 . $fn1;
        }else{
            $fn1 = $list[count($list)-1] + 1;
            $ID = $fn1;
            $FORM_ID = $fn2 . $fn1;
        }

        $FIRST_NAME = $req->input('FIRST_NAME');
        $LAST_NAME = $req->input('LAST_NAME');
        $ADDRESS = $req->input('ADDRESS');
        $EMAIL = $req->input('EMAIL');
        $TELEPHONE = $req->input('TELEPHONE');
        $MESSAGE = $req->input('MESSAGE');
        $DATETIME = $req->input('DATETIME');

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
            $message = "Surname field must not be empty";
            return response()->json($message);
        }else if(ctype_alpha(str_replace(' ', '', $LAST_NAME)) === false){
            $message = "Surname field must have only letters";
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
        
        $data = array('ID'=>$ID,'FORM_ID'=>$FORM_ID,  'FIRST_NAME'=>$FIRST_NAME,'LAST_NAME'=>$LAST_NAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL,'TELEPHONE'=>$TELEPHONE,'MESSAGE'=>$MESSAGE, 'DATETIME'=>$DATETIME);

        \DB::table('SELL_RENT')->insert($data);

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
        $fnum = stripslashes($FORM_ID);
        $message = remove_headers($_POST['MESSAGE']);
        $name = remove_headers($_POST['FIRST_NAME']);
        $surname = remove_headers($_POST['LAST_NAME']);
        $address = ($_POST['ADDRESS']);
        $phone = ($_POST['TELEPHONE']);
        $datetime = ($_POST['DATETIME']);
        $wordcount = str_word_count($message);
            //send email
        mail($admin_email, "Buy & Rent: Interested in property with code null", "First Name: $name\nLast Name: $surname\nAddress: $address\nPhone: $phone\nDate and Time: $datetime\nSubmission Code: $fnum\n\nMessage:\n-------------------\n$message", "From: $email");

        mail( $email, "Feedback for contacting", $replymsg , "From: $admin_email" );
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
        $post = BRNotification::findOrFail($id);
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

        $data = array('ID'=>$record, 'FIRST_NAME'=>$FIRST_NAME,'LAST_NAME'=>$LAST_NAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL,'TELEPHONE'=>$TELEPHONE,'MESSAGE'=>$MESSAGE);

        \DB::table('SELL_RENT')->where('ID',$record)->update($data);
        $post = BRNotification::findOrFail($record);
        
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
        $post = BRNotification::findOrFail($req);
        $record = $req->input('id');
        \DB::table('SELL_RENT')->where('ID',$record)->delete();
        return response()->json($post);
    }

    public function search(Request $req)
    {
        $AVAILABLE_FOR = $req->input('AVAILABLE_FOR');
        $TOWN = $req->input('TOWN');
        $AREA = $req->input('AREA');
        $TYPE = $req->input('TYPE');
        $SUBTYPE = $req->input('SUBTYPE');
        $FURNISHED = $req->input('FURNISHED');
        $ROOMS = $req->input('ROOMS');
        $FLOORS = $req->input('FLOORS');
        $MIN_PRICE = $req->input('MIN_PRICE');
        $MAX_PRICE = $req->input('MAX_PRICE');
        $SQUARE_METERS = $req->input('SQUARE_METERS');

        $MIN_PRICE = preg_replace('/[^0-9-]/', '', $MIN_PRICE);
        $MAX_PRICE = preg_replace('/[^0-9-]/', '', $MAX_PRICE);

        if(empty($MIN_PRICE)){
          $message = "Min Price field must contains an integer value";
          return response()->json($message);
        }
        if(empty($MAX_PRICE)){
          $message = "Max Price field must contains an integer value";
          return response()->json($message);
        }
        if($MIN_PRICE < 10){
          $message = "Min Price value must be greater than 10 Euros";
          return response()->json($message);
        }
        if($MAX_PRICE < 10){
          $message = "Max Price value must be greater than 10 Euros";
          return response()->json($message);
        }


        $min = 0;
        $max = 0;
        if($SQUARE_METERS == "1"){
          $min = 0;
          $max = 50;
        }
        if($SQUARE_METERS == "2"){
          $min = 50;
          $max = 75;
        }
        if($SQUARE_METERS == "3"){
          $min = 75;
          $max = 100;
        }
        if($SQUARE_METERS == "4"){
          $min = 100;
          $max = 125;
        }
        if($SQUARE_METERS == "5"){
          $min = 125;
          $max = 150;
        }
        if($SQUARE_METERS == "6"){
          $min = 150;
          $max = 200;
        }
        if($SQUARE_METERS == "7"){
          $min = 200;
          $max = 200;
        }

        $data = \DB::table('PROPERTY_PLOT')->where([
          ['AVAILABLE_FOR', '=', $AVAILABLE_FOR],
          ['TOWN', '=', $TOWN],
          ['AREA', '=', $AREA],
          ['TYPE', '=', $TYPE],
          ['SUBTYPE', '=', $SUBTYPE],
          ['FURNISHED', '=', $FURNISHED],
          ['ROOMS', '=', $ROOMS],
          ['FLOORS', '=', $FLOORS],
          ['PRICE', '>=', $MIN_PRICE],
          ['PRICE', '<=', $MAX_PRICE],
          ['SQUARE_METERS', '>=', $min],
          ['SQUARE_METERS', '<=', $max],
          ])->get();

        return response()->json($data);
    }

    public function searchimg(Request $req)
    {
        $title = $req->input('PROPERTY_ID');

        $data = \DB::table('image_gallery')->where([
          ['title', '=', $title],
          ])->get();

        return response()->json($data);
    }

    public function searchhome(Request $req)
    {
        $AVAILABLE_FOR = $req->input('AVAILABLE_FOR');
        $TOWN = $req->input('TOWN');
        $AREA = $req->input('AREA');
        $TYPE = $req->input('TYPE');
        $SUBTYPE = $req->input('SUBTYPE');
        $FURNISHED = $req->input('FURNISHED');
        $ROOMS = $req->input('ROOMS');
        $MIN_PRICE = $req->input('MIN_PRICE');
        $MAX_PRICE = $req->input('MAX_PRICE');

        $MIN_PRICE = preg_replace('/[^0-9-]/', '', $MIN_PRICE);
        $MAX_PRICE = preg_replace('/[^0-9-]/', '', $MAX_PRICE);

        if(empty($MIN_PRICE)){
          $message = "Min Price field must contains an integer value";
          return response()->json($message);
        }
        if(empty($MAX_PRICE)){
          $message = "Max Price field must contains an integer value";
          return response()->json($message);
        }
        if($MIN_PRICE < 10){
          $message = "Min Price value must be greater than 10 Euros";
          return response()->json($message);
        }
        if($MAX_PRICE < 10){
          $message = "Max Price value must be greater than 10 Euros";
          return response()->json($message);
        }

        $data = \DB::table('PROPERTY_PLOT')->where([
          ['AVAILABLE_FOR', '=', $AVAILABLE_FOR],
          ['TOWN', '=', $TOWN],
          ['AREA', '=', $AREA],
          ['TYPE', '=', $TYPE],
          ['SUBTYPE', '=', $SUBTYPE],
          ['FURNISHED', '=', $FURNISHED],
          ['ROOMS', '=', $ROOMS],
          ['PRICE', '>=', $MIN_PRICE],
          ['PRICE', '<=', $MAX_PRICE],
          ])->get();

        return response()->json($data);
    }

    public function searchimghome(Request $req)
    {
        $title = $req->input('PROPERTY_ID');

        $data = \DB::table('image_gallery')->where([
          ['title', '=', $title],
          ])->get();

        return response()->json($data);
    }
}