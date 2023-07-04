<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
      $users=User::all();
      return view('admin.users.index',compact('users'));
    }
    public function create()
    {
        return view("admin.users.create");
    }
    public function store(StoreUserRequest $request)
    {
        $data = $request->all();

        $destination_path = "public/images/users";
        if($request->hasFile('img'))
        {
            $image = $request->file('img');
            $extension = $image->getClientOriginalExtension();
            $image_name = time().'.'.$extension;
            $image->storeAs($destination_path,$image_name);
        }
        $data['img']=$image_name;
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->route('users.index');
    }
    public function destroy( $id){
        $user=User::destroy($id);
        return redirect()->route('users.index');

    }
}
