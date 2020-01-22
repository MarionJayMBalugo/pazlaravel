<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\model\humans;
class HumanController extends Controller
{
        public function welcome(){
         $human=humans::all();
        return view('index',compact('human'));
        }
        public function gotoCreate(){    
            return view('create');
        }
        public function delete(){
            return view('delete');
        }


   public function destroy($id) {
      DB::delete('delete from humans where id = ?',[$id]);
    return redirect()->route('addinformation'); 
   }
    public function show($id) {
        $users = DB::select('select * from humans where id = ?',[$id]);
        return view('update',['users'=>$users]);
        }

   public function edit( Request $request ,$id) {
    // $first_name = $request->input('first_name');
    // $middle_name = $request->input('middle_name');
    // $last_name = $request->input('last_name');
    // $email = $request->input('email');
    // $password = $request->input('password');
    // $age = $request->input('age');
    // $address = $request->input('address');
    // DB::update('update humans set first_name = ?,middle_name=?,last_name=?,email=?,password=?,age=?,address=? where id = ?',[$first_name,$middle_name,$last_name,$email,$password,$age,$address,$id]);
    // // DB::edit('delete from humans where id = ?',[$id]);
    //  return redirect()->route('create'); 
    // $human=humans::all();
    //  return view('index',compact('human'));

 }

   

public function addinformation(Request $request){
   
        $request->validate([
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email'
        ]);
        
        $human=new humans([
            'first_name'=>$request->get('first_name'),
            'middle_name'=>$request->get('middle_name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'age'=>$request->get('age'), 
            'password'=>$request->get('password')
        ]);
        $human->save();
        $human=humans::all();
        return view('index',compact('human'));

    }
 }

// public function destroy($id){
    
//     $human=Human::find($id)=>delete();
//     $human->delete();
//     return redirect('/'index)->with(sucess','human deleted');
    