@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Slider</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 ">
          <div class="card">
            <div class="card-header">
              <h4>Slider eidt</h4>
            </div>
            <form action="{{route('admin.slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method("PUT")
                <div class="card-body">
                    <div class="form-group">
                        <label for="image">Banner image</label>
                         <div class="mb-2">
                            <img src="{{asset($slider->image)}}" style="width: 200px" alt="">
                         </div>
                         <input type="file" name="image" id="image" value="{{$slider->image}}"  class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="type">Type</label>
                         <input type="text" name="type" id="type" class="form-control" value="{{$slider->type}}">
                    </div>
                    <div class="form-group">
                         <label for="title">Title</label>
                         <input type="text" name="title" id="title" class="form-control" value="{{$slider->title}}">
                     </div>
                     <div class="form-group">
                         <label for="price">Starting price</label>
                         <input type="text" name="price" id="price" class="form-control" value="{{$slider->price}}">
                    </div>
                    <div class="form-group">
                         <label for="url">Button url</label>
                         <input type="text" name="url" id="url" class="form-control" value="{{$slider->url}}">
                     </div>
                     <div class="form-group">
                         <label for="serial">Serial</label>
                         <input type="number" name="serial" id="serial" class="form-control" value="{{$slider->serial}}">
                    </div>
                    <div class="form-select">
                         <label for="status">Status</label>
                         <select name="status" id="status" class="form-control">
                            <option {{$slider->status ==1 ? 'selected' : null }} value="1">Active</option>
                            <option {{$slider->status ==0 ? 'selected' : null }}  value="0">Inactive</option>
                         </select>
                     </div>
                     <div class="mt-2">
                        <button class="btn btn-primary" type="submit">Update</button>
                     </div>
                 </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

