@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Room List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Room List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card !py-10">
        <div class="px-4 items-center justify-between flex">
          <h3 class="card-title text-lg font-medium">Room List</h3>

          <a href="{{ route('room.create') }}" class="py-[10px] px-[16px] border bg-blue-500 !border-blue-500 text-white hover:bg-white hover:!text-blue-500 font-medium rounded">Create Room</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>SL</th>
                <th>Image</th>
                <th>Title</th>
                <th>Bed</th>
                <th>Bath</th>
                <th>Is Wifi</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($rooms as $data)
                
              
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td class="h-[70px]"><img class="w-auto h-full" src="{{ asset($data->image) }}" alt=""></td>
                <td>{{ substr($data->title, 0 , 20)  }}...</td>
                <td>{{ $data->bed }}</td>
                <td>{{ $data->bath }}</td>
                <td>{{ $data->wifi == 1 ? "Availbale" : "Unavailable" }}</td>
                <td>{{ $data->description }}</td>
                <td class="space-x-1">
                  <a href="{{ route('room.edit', $data->id) }}" class="border p-2 text-sm rounded !border-blue-500 text-blue-500 hover:text-white hover:bg-blue-500"><i class="fa-solid fa-pen-to-square"></i></a>
            
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