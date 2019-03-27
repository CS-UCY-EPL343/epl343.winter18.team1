<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArticlesController extends Controller
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

    public function deiksemouto()
    {
        //$ARTICLE = \DB::table('ARTICLE')->where('ARTICLE_ID', '1')->first();
        $ARTICLE = \DB::table('ARTICLE')->orderBy('DATE','DESC')->get();
        return view('pages.news', ['ARTICLE'=>$ARTICLE]);
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
        $TITLE = $req->input('TITLE');
        //$IMAGE = $req->input('IMAGE');
        $IMAGE = "images/" . $req->input('IMAGE');
        //$file = $req->file('IMAGE');
        //$IMAGE = $file->getClientOriginalName();
        //$file->move('images/', $IMAGE);
        $DATE = $req->input('DATE');
        
        $data = array('ARTICLE_ID'=>$ARTICLE_ID,'DOCUMENT'=>$DOCUMENT,'TITLE'=>$TITLE,'IMAGE'=>$IMAGE,'DATE'=>$DATE);

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
        $TITLE = $req->input('TITLE');
        //$IMAGE = $req->input('IMAGE');
        $IMAGE = "images/" . $req->input('IMAGE');
        //$file = $req->file('IMAGE');
        //$IMAGE = $file->getClientOriginalName();
        //$file->move('images/', $IMAGE);
        $DATE = $req->input('DATE');

        $data = array('DOCUMENT'=>$DOCUMENT,'TITLE'=>$TITLE,'IMAGE'=>$IMAGE,'DATE'=>$DATE);

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
