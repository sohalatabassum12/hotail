@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Staff</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Create Staff</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card !py-10">
        <div class="px-4 items-center justify-between flex">
          <h3 class="card-title text-lg font-medium">Create Staff</h3>

        </div>
        <!-- /.card-header -->
        <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body w-[50%]">

                <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Full_Name</label>
                    <input name="name" type="text" value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Full-Name">
                    @if($errors->first('name'))
                    <span class="text-red-500 text-sm">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">facebook_link</label>
                    <input name="facebook_link" type="text" value="{{ old('facebook_link') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter facebook_link">
                    @if($errors->first('facebook_link'))
                    <span class="text-red-500 text-sm">{{ $errors->first('facebook_link') }}</span>
                    @endif
                </div>

                  <button type="submit" class="btn btn-primary !text-blue-500">Submit</button>
            </div>
        </form>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
</div>
@endsection
