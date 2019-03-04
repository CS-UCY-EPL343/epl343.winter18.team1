<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ARTICLE = \DB::table('ARTICLE')->get();
        return view('pages.articles', ['ARTICLE'=>$ARTICLE]);
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
        $list = \DB::table('ARTICLE')->pluck('ARTICLE_ID')->toArray();
        $fn1 = $list[count($list)-1] + 1;
        $fn2 = "cl";

        $ARTICLE_ID = $fn1;

        $DOCUMENT = $req->input('DOCUMENT');
        $POSITION = $req->input('POSITION');
        $TITLE = $req->input('TITLE');
        
        $data = array('ARTICLE_ID'=>$ARTICLE_ID,'DOCUMENT'=>$DOCUMENT,'POSITION'=>$POSITION,'TITLE'=>$TITLE);

        \DB::table('ARTICLE')->insert($data);


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
        $record = $req->input('ARTICLE_ID');
        $DOCUMENT = $req->input('DOCUMENT');
        $POSITION = $req->input('POSITION');
        $TITLE = $req->input('TITLE');

        $data = array('DOCUMENT'=>$DOCUMENT,'POSITION'=>$POSITION,'TITLE'=>$TITLE);

        \DB::table('ARTICLE')->where('ARTICLE_ID',$record)->update($data);
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
        $record = $req->input('ARTICLE_ID');

        \DB::table('ARTICLE')->where('ARTICLE_ID',$record)->delete();
        return redirect()->back();
    }
}
