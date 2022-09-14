<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{




    public function index()
    {
        $users = User::latest()->paginate(5);



        return view('pages.backend.user.index',compact('users'));
    }

    public function create(Request $request)

    {

       return view('pages.backend.user.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile'=>'required',
            'password'=>'required'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>$request->password

        ]);

        return redirect()->route('user.index')
                        ->with('success','user created successfully.');
    }

    public function edit(User $user)
    {
        return view('pages.backend.user.update',compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile'=>'required',


        ]);

        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
        ]);
        return redirect()->route('user.index')
                        ->with('success','user updated successfully');

}

public function destroy($id)
{

    User::where('id',$id)->delete();
    return back()->with('success','user has been deleted successfully!');

}


}
