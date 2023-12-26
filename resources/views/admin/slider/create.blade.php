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
              <h4>Slider create</h4>
            </div>
            <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                         <label for="image">Banner image</label>
                         <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="type">Type</label>
                         <input type="text" name="type" id="type" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="title">Title</label>
                         <input type="text" name="title" id="title" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="price">Starting price</label>
                         <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="url">Button url</label>
                         <input type="text" name="url" id="url" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="serial">Serial</label>
                         <input type="number" name="serial" id="serial" class="form-control">
                    </div>
                    <div class="form-select">
                         <label for="status">Status</label>
                         <select name="status" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                         </select>
                     </div>
                 </div>
                 <button class="btn btn-primary" type="submit">Create</button>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection
