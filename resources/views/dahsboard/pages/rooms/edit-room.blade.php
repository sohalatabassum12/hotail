@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Room</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Update Room</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card !py-10">
        <div class="px-4 items-center justify-between flex">
          <h3 class="card-title text-lg font-medium">Update Room</h3>

        </div>
        <!-- /.card-header -->
        <form action="{{ route('room.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body w-[50%]">

                <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input value="{{ $room->image }}" name="image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                </div>
                <img src={{ asset($room->image) }} class="w-[100px] mb-2" alt="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="title" type="text" value="{{ $room->title }}" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                    @if($errors->first('title'))
                    <span class="text-red-500 text-sm">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input name="price" type="number" value="{{ $room->price }}" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
                    @if($errors->first('price'))
                    <span class="text-red-500 text-sm">{{ $errors->first('price') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bed</label>
                    <input name="bed" type="number" value="{{ $room->bed }}" class="form-control" id="exampleInputEmail1" placeholder="Enter number of bed">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bath</label>
                    <input name="bath" type="number" value="{{ $room->bath }}" class="form-control" id="exampleInputEmail1" placeholder="Enter number of bath">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{ $room->description }}</textarea>
                </div>
                <div class="form-check mb-4">
                    <input name="wifi" type="checkbox" {{ $room->wifi == true ? 'checked': '' }}  class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Wifi</label>
                </div>
                <input type="hidden" name="id" value={{ $room->id }}>
                <button type="submit" class="btn btn-primary !text-blue-500">Submit</button>
            </div>
        </form>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
</div>
@endsection