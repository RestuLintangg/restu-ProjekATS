<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::simplePaginate(5);
        return view('user.index', compact('users')); 

    }

    public function create()
    {
        return view('user.dashboard');
    }

    public function store(Request $request)
    {
        
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string|max:255',
            'product' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
    
        $password = substr($name, 0, 3) . substr($email, 0, 3);
       
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->input('address'),
            'product'=>$request->input('product'),
            'password'=>Hash::make($password),
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }


    
    public function show($id)
    {

    }
  
    public function edit($id)
    {
        $user = User::findOrFail($id); 
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'product' => 'required',
        ]);

        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->product = $request->product;

        if ($request->filled('password')) {
            $users->password = Hash::make($request->password);
        }
        $users->save();
        return redirect()->route('user.index')->with('success', 'Updated Barang pesanan successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success');
    }
}