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
        $images = \DB::table('image_gallery_articles')->get();
        //$ARTICLE = \DB::table('ARTICLE')->get();
        //return view('pages.articles', ['ARTICLE'=>$ARTICLE, 'image_gallery_articles' => $images]);
        return view('pages.articles', ['image_gallery_articles' => $images]);
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
        $images = \DB::table('image_gallery_articles')->orderBy('DATE','DESC')->get();
        // $ARTICLE = \DB::table('ARTICLE')->orderBy('DATE','DESC')->get();
        // return view('pages.news', ['ARTICLE'=>$ARTICLE, 'image_gallery_articles' => $images]);
        return view('pages.news', ['image_gallery_articles' => $images]);
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
        $list = \DB::table('image_gallery_articles')->pluck('id')->toArray();
        $fn1 = $list[count($list)-1] + 1;

        $ARTICLE_ID = $fn1;

        $DOCUMENT = $req->input('DOCUMENT');
        $TITLE = $req->input('title');
        // //$IMAGE = $req->input('IMAGE');
        // $IMAGE = $req->image->getClientOriginalName();
        // $file = "images/" .  $IMAGE;
        // $request->file('image')->move(public_path("/images"), $file);
        $DATE = $req->input('DATE');
        
        //$data = array('id'=>$ARTICLE_ID,'DOCUMENT'=>$DOCUMENT,'title'=>$TITLE,'image'=>$IMAGE,'DATE'=>$DATE);
        $data = array('id'=>$ARTICLE_ID,'DOCUMENT'=>$DOCUMENT,'title'=>$TITLE,'DATE'=>$DATE);

        \DB::table('image_gallery_articles')->insert($data);

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
        $record = $req->input('ARTICLE_ID1');
        $DOCUMENT = $req->input('DOCUMENT1');
        $TITLE = $req->input('TITLE1');
        //$IMAGE = $req->input('IMAGE1');
        //$IMAGE = "images/" . $req->input('IMAGE');
        //$file = $req->file('IMAGE');
        //$IMAGE = $file->getClientOriginalName();
        //$file->move('images/', $IMAGE);
        $DATE = $req->input('DATE1');

        // $data = array('DOCUMENT'=>$DOCUMENT,'title'=>$TITLE,'image'=>$IMAGE,'DATE'=>$DATE);
        $data = array('DOCUMENT'=>$DOCUMENT,'title'=>$TITLE,'DATE'=>$DATE);

        \DB::table('image_gallery_articles')->where('id',$record)->update($data);
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
        $record = $req->input('ARTICLE_ID2');

        \DB::table('image_gallery_articles')->where('id',$record)->delete();
        return redirect()->back();
    }
}
