<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . auth()->user()->id],
            'image' => ['image', 'max:2048'],
        ]);

        $user = auth()->user();

        if ($request->hasFile('image')) {

            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }

            $image = $request->image;
            $imageName = rand() . '.' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $user->image = '/uploads/' . $imageName;
        }


        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back();
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back();
    }
}
