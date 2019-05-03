<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
        $MIN_PRICE = $req->input('MIN_PRICE');
        $MAX_PRICE = $req->input('MAX_PRICE');

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

    public function searchimg(Request $req)
    {
        $title = $req->input('PROPERTY_ID');

        $data = \DB::table('image_gallery')->where([
          ['title', '=', $title],
          ])->get();

        return response()->json($data);
    }
}
