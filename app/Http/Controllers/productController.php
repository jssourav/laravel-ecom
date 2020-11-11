<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    function index(){
    	$data = Product::all();
    	return view('product',['products'=>$data]);
    }

    function detail($id){
    	$data = Product::find($id);
    	return view('detail',['product'=>$data]);
    }

    function search(Request $req){
    	$data['products'] = product::where('name','like', '%'.$req->input('query').'%')->get();
    	$data['search_for'] = $req->input('query');
    	return view('search',$data);
    }
}
