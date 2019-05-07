<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
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
        $users = \App\User::all();
        return view('index-user', compact('users'));
    }
    public function edit($id)
    {
        $users = \App\User::find($id);
        return view('edit-user', compact('users', 'id'));
    }
    public function create()
    {
        return view('create-user');
    }
    public function store(Request $request)
    {
        $user = new \App\User;
        $user -> name = $request -> get('name');
        $user -> email = $request -> get('email');
        $user -> password = $request -> get('password');
        $user -> save();

        return redirect('home') -> with('success', 'Information has been added');
    }
    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user -> name = $request -> get('name');
        $user -> email = $request -> get('email');
        $user -> password = $request -> get('password');
        $user -> save();

        return redirect('home');
    }
    public function destroy($id)
    {
        $users = \App\User::find($id);
        $users -> delete($id);
        return redirect('home') -> with('susscess', 'Information has been deleted');
    }
    public function home()
    {
        $users = \App\User::paginate(5);
        return view('home', compact('users'));
    }
    public function showbyname()
    {
        $users = \App\User::where('name', '=', 'hihihi')
            ->paginate(5);
        return view('home', compact('users'));
    }
    public function profile($id)
    {
        $user = \App\User::find($id);
        return view('showProfile');
    }
}
