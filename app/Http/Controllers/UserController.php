<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
        $rows = User::all();
        return view('user.index',compact('rows'));
    }
    public function create()
{
    return view('user.create');
} 
public function store(Request $request)
{
      User::create([
        'email' => $request->email,
        'name' => $request->name,
        'password'=> $request->password,
        'role'=> $request->role,
        'hp'=> $request->hp
    ]);
    return redirect('user');
}

public function show(string $id)
{
    $row = User::findOrFail($id);

    //render view with post
    return view('user.show', compact('row'));
}

public function edit(string $id)
{
    $row = User::find($id);
    return view('user.edit', compact('row'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $row = User::findOrFail($id);

    $row->update([
        'email' => $request->email,
        'name' => $request->name,
        
        'role'=> $request->role,
        'hp'=> $request->hp
    ]);

    return redirect('user');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $row = User::findOrFail($id);

    $row->delete();

    return redirect('user');
}
    }
