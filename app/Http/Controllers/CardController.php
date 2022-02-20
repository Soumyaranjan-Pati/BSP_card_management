<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CardManagement;

class CardController extends Controller
{
    public function cardCreate(Request $request){
        return view('card_create');
    }

    public function cardStore(Request $request){
      CardManagement::create([
        'name' => $request->name,
        'description' => $request->description,
        'address' => $request->address,
        'contacts' => $request->contacts,
        'email' => $request->email
        ]); 
        
       return redirect('/');
    } 

    public function cardLists(){
        $card_lists= CardManagement::all();
        return view('card_list', compact('card_lists'));
    }

    public function cardEdit(Request $request){
        $data=CardManagement::findOrfail($request->id);
        return view('card_edit', compact('data'));
    }
    public function cardDelete(Request $request){
        CardManagement::where('id',$request->id)->delete();
        return redirect('/card_list');
    }
    public function cardUpdate(Request $request){
        $card_data = CardManagement::find($request->id);
        $card_data->name = $request->name;
        $card_data->contacts = $request->contacts;
        $card_data->email = $request->email;
        $card_data->address = $request->address;
        $card_data->description = $request->description;
        $card_data->save();
        
        return redirect('/card_list');
    }


}