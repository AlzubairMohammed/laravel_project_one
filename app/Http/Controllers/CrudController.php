<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Offer;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function getOffers(){

       return Offer::get();
    }

    public function createOffer(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'details' => 'required'
        ],['name.required'=>'م']);
        if($validator->fails()) {
            return $validator->errors();
        }
        Offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
        ]) ;
        return "create successfully";
     }
}
