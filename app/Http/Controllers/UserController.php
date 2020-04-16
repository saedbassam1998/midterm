<?php

namespace App\Http\Controllers;

use App\Userr;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
        public function index()
        {
            // $user = Userr::orderBy('email')->get();
            // return view('user.index',compact('user'));
    
            $user = Userr::all();
            return view('user.index', compact('user'));
        }
    
    
        public function create()
        {
            return view('user.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required'
            ]);
    
            $user = new Userr([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'job_title' => $request->get('job_title'),
                'city' => $request->get('city'),
                'country' => $request->get('country')
            ]);
            $user->save();
            return redirect('/user')->with('success', 'user saved!');
        }
        public function show($id)
        {
            // $user = Userr::where('id',$id)->get();
            // return view('user.index',compact('user'));
        }
    
        public function edit($id)
        {
            $user = Userr::find($id);
            return view('user.edit', compact('user'));
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required'
            ]);
    
            $user = Userr::find($id);
            $user->first_name =  $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->email = $request->get('email');
            $user->job_title = $request->get('job_title');
            $user->city = $request->get('city');
            $user->country = $request->get('country');
            $user->save();
    
            return redirect('/user')->with('success', 'user updated!');
          
        }
        public function destroy($id)
        {
           $user = Userr::find($id);
            $user->delete();
         
           return redirect('/user')->with('success', 'user deleted!');
        }
    
    
    
    
    }

