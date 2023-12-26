<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('frontend.profile.profile');
    }

    public function update(Request $request)
    {

        $request->validate([
            'image' => ['image', 'max:2048'],
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . auth()->user()->id]
        ]);

        $user = auth()->user();

        if ($request->hasFile('image')) {

            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }

            $image = $request->image;
            $imageName = rand() . '_' . $image->getClientOriginalName();

            $image->move(public_path('uploads'), $imageName);

            $user->image = 'uploads/' . $imageName;
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        toastr()->success('profile update done');

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

        toastr()->success('password update successfully');

        return redirect()->back();
    }
}
