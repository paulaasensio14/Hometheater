<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    public function __construct() {
        $this->middleware("auth")->except("index", "show");
    }

    // Show All
    public function index() {
        $users = User::simplePaginate(15);
        return view('user.index', ['userList'=>$users]);
    }

    // Form create user
    public function create(){
        return view('user.form');
    }

    // Create user
    public function store(Request $r){
        
        $r->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|max:255'
        ]);

        $user = new User($r->all());
        
        $user->save();
        return redirect()->route('user.index');
    }

    // Show one user
    public function show($id){
        $user = User::find($id);
        return view('user.show', ['user'=>$user]);
    }

    // Update user
    public function update($id, Request $r){
        $user = User::find($id);
        $user->fill($r->all());
        $user->save();
        return redirect()->route('user.index');
    }

    // Form update user
    public function edit($id){
        $user = User::find($id);
        return view('user.form', array('user' => $user));
    }

    // Delete user
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
