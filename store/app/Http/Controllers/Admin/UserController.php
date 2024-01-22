<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('users.view');

        $users = User::paginate();
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('users.create');

        $user =new User();
        $roles = Role::all();
        return view(
            'dashboard.users.create',
            compact('user','roles')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        Gate::authorize('users.create');
        $user = User::query()->create($request->all());
        $user->roles()->attach($request->roles);
        return redirect()->route('dashboard.users.index')
            ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        Gate::authorize('users.update');
        $roles = Role::all();
        return view(
            'dashboard.users.edit',
            compact('user','roles')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        Gate::authorize('users.update');
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required', 'string', Password::default()],
            'roles'=> ['required', 'array'],
        ]);
        $user->update($request->all());
        $user->roles()->sync($request->post('roles'));
        return redirect()->route('dashboard.users.index')
            ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::authorize('users.delete');

        User::destroy($id);
        return redirect()->route('dashboard.users.index')
            ->with('success','User deleted successfully');
    }
}
