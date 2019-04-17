<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class RightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \DB::table('users')->get();
        return view('pages.rights', ['users'=>$users]);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        
    }

    public function changeStatus1(Request $req) 
    {
        $id = $req->input('id');
        $post = User::findOrFail($id);
        if($post->ADD_ARTICLE){
            $post->ADD_ARTICLE=0;
        }
        else{
            $post->ADD_ARTICLE=1;
        }
        
        $data = array('ADD_ARTICLE'=>$post->ADD_ARTICLE);
        \DB::table('users')->where('id',$id)->update($data);       
        return response()->json($post);
    }

    public function changeStatus2(Request $req) 
    {
        $id = $req->input('id');
        $post = User::findOrFail($id);
        
        if($post->ADD_PROPERTY_PLOT){
            $post->ADD_PROPERTY_PLOT=0;
        }
        else{
            $post->ADD_PROPERTY_PLOT=1;
        }
        
        $data = array('ADD_PROPERTY_PLOT'=>$post->ADD_PROPERTY_PLOT);
        \DB::table('users')->where('id',$id)->update($data);       
        return response()->json($post);
    }

    public function changeStatus3(Request $req) 
    {
        $id = $req->input('id');
        $post = User::findOrFail($id);
        
        if($post->ADD_CUSTOMER){
            $post->ADD_CUSTOMER=0;
        }
        else{
            $post->ADD_CUSTOMER=1;
        }
        
        $data = array('ADD_CUSTOMER'=>$post->ADD_CUSTOMER);
        \DB::table('users')->where('id',$id)->update($data);       
        return response()->json($post);
    }

    public function changeStatus4(Request $req) 
    {
        $id = $req->input('id');
        $post = User::findOrFail($id);
        
        if($post->ADD_EMPLOYEE){
            $post->ADD_EMPLOYEE=0;
        }
        else{
            $post->ADD_EMPLOYEE=1;
        }
        
        $data = array('ADD_EMPLOYEE'=>$post->ADD_EMPLOYEE);
        \DB::table('users')->where('id',$id)->update($data);       
        return response()->json($post);
    }

    public function changeStatus5(Request $req) 
    {
        $id = $req->input('id');
        $post = User::findOrFail($id);
        
        if($post->ADD_COLLABORATOR){
            $post->ADD_COLLABORATOR=0;
        }
        else{
            $post->ADD_COLLABORATOR=1;
        }
        
        $data = array('ADD_COLLABORATOR'=>$post->ADD_COLLABORATOR);
        \DB::table('users')->where('id',$id)->update($data);       
        return response()->json($post);
    }

    public function changeStatus6(Request $req) 
    {
        $id = $req->input('id');
        $post = User::findOrFail($id);
        
        if($post->NOTIFICATIONS){
            $post->NOTIFICATIONS=0;
        }
        else{
            $post->NOTIFICATIONS=1;
        }
        $data = array('NOTIFICATIONS'=>$post->NOTIFICATIONS);
        \DB::table('users')->where('id',$id)->update($data);       
        return response()->json($post);
    }
}
