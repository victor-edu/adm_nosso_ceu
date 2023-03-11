<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user= User::all();
        return view('usuarios.index')->with('user', $user);
    }
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(UserFormRequest $request)
    {
        $user=User::create($request->all());
        return to_route('admin.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('admin.index');
    }
    public function edit(User $user)
    {   
      return view('usuarios.edit')->with('user', $user);
    }

    public function update(User $user, UserFormRequest $request)
    {
        $user->fill($request->all());
        $user->save();

        return to_route('admin.index');
    }

    public function home()
    {
        return view('usuarios.create');
    }
    
}
