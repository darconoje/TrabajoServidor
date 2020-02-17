<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //$users = DB::table('users')->get();
        $users = User::all();

        $title = 'Listado de usuarios';

//        return view('users.index')
//            ->with('users', User::all())
//            ->with('title', 'Listado de usuarios');

        return view('users.index', compact('title', 'users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => ['required','unique:users,name'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required','min:6']
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'password.required' => 'El campo contraseña es obligatorio',
            'name.unique' => 'El nombre ya esta en uso por otro usuario',
            'email.unique' => 'El correo electronico ya esta en uso por otro usuario',
            'password.min' => 'La contraseña debe contener 6 caracteres o mas',
            'email.regex' => 'El email no tiene un formato correcto'
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ['required','min:6'],
        ],[
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',  
            'password.required' => 'El campo contraseña es obligatorio', 
            'name.unique' => 'El nombre ya esta en uso por otro usuario',
            'email.unique' => 'El correo electronico ya esta en uso por otro usuario',
            'password.min' => 'La contraseña debe contener 6 caracteres o mas',
            'email.regex' => 'El email no tiene un formato correcto'                     
        ]);

        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}