<?php

namespace App\Traits;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


trait ImageUpload
{
    public function imageUpload(Request $request, $name, $path)
    {
        if ($request->hasFile($name)) {
            $image = $request->$name;
            $imageName = rand() . '.' . $image->getClientOriginalName();
            $image->move(public_path($path), $imageName);
            return $path . '/' . $imageName;
        }
    }

    public function imageUpdate(Request $request, $name, $path, $oldPath = null)
    {
        if ($request->hasFile($name)) {

            if (File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }

            $image = $request->$name;
            $imageName = rand() . '.' . $image->getClientOriginalName();
            $image->move(public_path($path), $imageName);
            return $path . '/' . $imageName;
        } else {
            return $oldPath;
        }
    }


    public function imageDelete($path)
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
