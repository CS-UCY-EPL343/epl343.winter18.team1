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
         $list = \DB::table('SELL_RENT')->pluck('ID')->toArray();
        $fn1 = $list[count($list)-1] + 1;
        $fn2 = "br";
        $FORM_ID = $fn2 . $fn1;

        $ID = $fn1;
        // $PROPERTY_ID = $req->input('PROPERTY_ID');
        $FIRST_NAME = $req->input('FIRST_NAME');
        $LAST_NAME = $req->input('LAST_NAME');
        $ADDRESS = $req->input('ADDRESS');
        $EMAIL = $req->input('EMAIL');
        $TELEPHONE = $req->input('TELEPHONE');
        $MESSAGE = $req->input('MESSAGE');
        $DATETIME = $req->input('DATETIME');
        
        // 'PROPERTY_ID'=>$PROPERTY_ID,
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
        // $property = ($_POST['PROPERTY_ID']);
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
}