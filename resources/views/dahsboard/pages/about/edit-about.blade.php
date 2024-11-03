@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update staff</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Update About</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card !py-10">
        <div class="px-4 items-center justify-between flex">
          <h3 class="card-title text-lg font-medium">Update About</h3>

        </div>
        <!-- /.card-header -->
        <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body w-[50%]">


                <div class="form-group">
                    <label for="exampleInputEmail1">About</label>
                    <input name="message" type="text" value="{{ $about->about }}" class="form-control" id="exampleInputEmail1" placeholder="Enter About">
                    @if($errors->first('message'))
                    <span class="text-red-500 text-sm">{{ $errors->first('message') }}</span>
                    @endif
                </div>




                <input type="hidden" name="id" value={{ $about->id }}>
                <button type="submit" class="btn btn-primary !text-blue-500">Submit</button>
            </div>
        </form>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
</div>
@endsection
