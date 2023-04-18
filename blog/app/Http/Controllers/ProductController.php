<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addproductform(){
        return view("products.addproduct");
    }

    public function productstore(Request $request){
        DB::table('products')->insert([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'brand' => $request->input('brand'),
            'image' => $request->input('image'),
            'website' => $request->input('website')
        ]);
        return redirect('/productcreated');
    }

    public function updatepage(){
        return view('products.update');
    }

    public function productupdated(Request $request){
        DB::table('products')->where([
            'name' => $request->input('name')])
            ->update([
                'description' => $request->input('description'),
                'image' => $request->input('image')
            ]);
        return redirect('/productupdated');
    }

    public function deletepage(){
        return view('products.delete');
    }

    public function productdeleted(Request $request){
        DB::table('products')->delete(['id' => $request->input('id')]);
        return redirect('/productdeleted');
    }
}
