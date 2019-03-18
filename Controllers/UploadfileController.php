<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;

class UploadfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    
    function upload(Request $rewuest{

        $this->validate($request, ['select_file' => 'required|image|mimes:jpeg,png,jpg,gif| max:2048']);
        $image=$request->file('select_file');
    }
   
}
