<?php

namespace App\Http\Controllers;

use App\Mid;
use Illuminate\Http\Request;

class MidController extends Controller
{
    public function index(){
        //$tasks =DB::table('tasks')->get();
         $tasks =Mid::orderBy('created_at')->get();
         return view('add_edit',compact('tasks'));}
     
     
     public function add_page(){
        
     $tasks =Mid::orderBy('created_at')->get();
     return view('add_edit',compact('tasks'));
     }
 
     
     public function index_page(){
     
         $tasks =Mid::orderBy('created_at')->get();
         return view('index',compact('tasks'));}
 
 
     
      public function destroy( $id){
         
         $task=Mid::find($id);
         $task->delete();
        return redirect()->back();
     }
     
     
 
 
     public function store(Request $request){
         DB::table('tasks')->insert([
            'name'=>$request->name,
             'email'=>$request->email,
             'phone'=>$request->phone,
             'created_at'=>now(),
         ]);
 
         $request->validate([
             'name'=>'required|min:10|max:255',
             'phone'=>'required|min:10|max:10',
             'email' => 'required|email',
 
         ]);
              //$task=new Mid();
               //$task->name =$request("name");
               //$task->email =$request("email");
               //$task->phone =$request("phone");
               //$task->save();
         
          $tasks =Mid::orderBy('created_at')->get();
          return  view('index',compact('tasks'));
          }
     
     
     
     public function edit(Mid $id){
        
        
        // $tasks =Mid::all();
        // $task=Mid::find($id);
          return view('add_edit',compact('id'));
         
         }
            
          
          
          public function update($id){
 
             $task=new Mid();
             $task->name =$request("name");
             $task->email =$request("email");
             $task->phone =$request("phone");
             $task->save();
             $tasks =Mid::orderBy('created_at')->get();
             return  view('index',compact('tasks'));
            }
}
