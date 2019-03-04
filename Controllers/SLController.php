<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Post;
use View;

class SLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SELL_LET = \DB::table('SELL_LET')->get();
        $SELL_RENT = \DB::table('SELL_RENT')->get();
        return view('pages.notifications', ['SELL_LET'=>$SELL_LET, 'SELL_RENT'=>$SELL_RENT]);
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $req, $ID)
    {
        $slnoti = SLNotification::findorFail($ID);
        $slnoti->ID=$req->input('ID');
        $slnoti->FIRST_NAME=$req->input('FIRST_NAME');
        $slnoti->LAST_NAME=$req->input('LAST_NAME');
        $slnoti->ADDRESS=$req->input('ADDRESS');
        $slnoti->EMAIL= $req->input('EMAIL');
        $slnoti->TELEPHONE=$req->input('TELEPHONE');
        $slnoti->MESSAGE=$req->input('MESSAGE');


        $record = $req->input('ID');
        $FIRST_NAME = $req->input('FIRST_NAME');
        $LAST_NAME = $req->input('LAST_NAME');
        $ADDRESS = $req->input('ADDRESS');
        $EMAIL = $req->input('EMAIL');
        $TELEPHONE = $req->input('TELEPHONE');
        $MESSAGE = $req->input('MESSAGE');

        $s = 0;
        if($req->input('SELL') == 1)
            $s = 1;
        $SELL = $s;
        $slnoti->SELL=$SELL;

        $l = 0;
        if($req->input('LET') == 1)
            $l = 1;
        $LET = $l;
        $slnoti->LET=$LET;

        $slnoti->save();
        return response()->json($slnoti);

        // $data = array('FIRST_NAME'=>$FIRST_NAME,'LAST_NAME'=>$LAST_NAME,'ADDRESS'=>$ADDRESS,'EMAIL'=>$EMAIL,'TELEPHONE'=>$TELEPHONE,'MESSAGE'=>$MESSAGE,'SELL'=>$SELL,'LET'=>$LET);

        // \DB::table('SELL_LET')->where('ID',$record)->update($data);
        // return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        $slnoti = SLNotification::findorFail($ID);
        $slnoti->delete();
        return response()->json($slnoti);
        // $record = $req->input('ID');

        // \DB::table('SELL_LET')->where('ID',$record)->delete();
        // return redirect()->back();
    }
}
