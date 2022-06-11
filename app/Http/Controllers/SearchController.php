<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $request )
    {
        if(isset($_GET['qurey']))
        {
            $search_text = $_GET['qurey'];

            $clients = DB::table('clients')->where('client_code' ,'LIKE','%'.$search_text.'%')
            ->orWhere('phone', 'LIKE', '%' .$search_text. '%')
            ->orWhere('email', 'LIKE', '%' .$search_text. '%')
            ->orWhere('nationality', 'LIKE', '%' .$search_text. '%')
            ->orWhere('identity_number', 'LIKE', '%' .$search_text. '%')->paginate(10);


            
            $clients ->appends($request->all());

            return view('layouts.search',['clients' =>$clients]);

        }else{
        return view('layouts.search');
             }
   }
}
