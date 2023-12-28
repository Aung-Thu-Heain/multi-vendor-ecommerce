<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\SlidersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index(SlidersDataTable $dataTable)
    {
        return $dataTable->render('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2000'],
            'type' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'url' => ['required', 'url'],
            'serial' => ['required', 'integer'],
            'status' => ['required'],

        ]);

        $slider = new Slider();
        $imageUrl = $this->imageUpload($request, 'image', 'uploads');
        $slider->image = $imageUrl;
        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->price = $request->price;
        $slider->url = $request->url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;

        $slider->save();

        toastr('Create slider successful', 'success');

        return redirect()->route('admin.slider.index');
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
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2000'],
            'type' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'url' => ['required', 'url'],
            'serial' => ['required', 'integer'],
            'status' => ['required'],

        ]);


        $slider = Slider::findOrFail($id);
        $imageUrl = $this->imageUpdate($request, 'image', 'uploads', $slider->image);
        $slider->image = $imageUrl;
        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->price = $request->price;
        $slider->url = $request->url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;

        $slider->save();

        toastr('Update slider successful', 'success');

        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);

        $this->imageDelete($slider->image);

        $slider->delete();

        return response(['status' => 'success', 'message' => 'Slider delete successfully']);
    }
}
