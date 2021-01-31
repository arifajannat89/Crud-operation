<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blood_bank;
class bloodController extends Controller
{
    public function index(){

    	$Blood1=blood_bank::latest()-> paginate(5);
    	return view('Blood1.index', compact('Blood1'));
    }

    public function create(){

    	return view('Blood1.create');
    }

    public function store(Request $request){
            
            $request->validate([

              'Member_name'=>'required',
              'Blood_Group'=>'required',
              'Contact_Number'=>'required'


            ]);
         blood_bank::create($request->all());   

         return redirect()->route('Blood1.index')->with('Success', 'Profile created successfully!');

          }

       public function edit($id){

         return view('Blood1.edit', [
            'blood_bank' => blood_bank::findOrFail($id)
        ]);
       }

       public function update(Request $request, $id){

          
         $request->validate([
              'Member_name'=>'required',
              'Blood_Group'=>'required',
              'Contact_Number'=>'required'

            ]);
        $blood_bank = $request -> all();
        blood_bank::find($id) -> update($blood_bank);
         return redirect()->route('Blood1.index')->with('Success', 'Profile updated successfully!');

       }

      public function destroy($id)
      {

      	blood_bank::destroy($id);
      	return redirect()->route('Blood1.index')->with('Success', 'Profile Deleted successfully!');

      }
}
