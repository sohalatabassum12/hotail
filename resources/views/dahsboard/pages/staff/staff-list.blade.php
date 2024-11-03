@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Staff List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Staff List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card !py-10">
        <div class="px-4 items-center justify-between flex">
          <h3 class="card-title text-lg font-medium">Staff List</h3>

          <a href="{{route('staff.create')}}" class="py-[10px] px-[16px] border bg-blue-500 !border-blue-500 text-white hover:bg-white hover:!text-blue-500 font-medium rounded">Enter Staff Information</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>SL</th>
                <th>Image</th>
                <th>Full_Name</th>
                <th>fb_link</th>

                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($staff as $staff)


              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td class="h-[70px]"><img class="w-auto h-full" src="{{ asset($staff->image) }}" alt=""></td>

                <td>{{ $staff->name }}</td>
                <td>{{ $staff->facebook_link }}</td>

                <td class="space-x-1">
                  <a href="{{ route('staff.edit', $staff->id) }}" class="border p-2 text-sm rounded !border-blue-500 text-blue-500 hover:text-white hover:bg-blue-500"><i class="fa-solid fa-pen-to-square"></i></a>
                   <a href="{{ route('staff.delete', $staff->id) }}" class="border p-2 text-sm rounded !border-red-500 text-red-500 hover:text-white hover:bg-red-500"><i class="fa-solid fa-trash"></i></a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
</div>
@endsection
