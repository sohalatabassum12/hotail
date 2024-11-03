@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Packege List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Packege List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card !py-10">
        <div class="px-4 items-center justify-between flex">
          <h3 class="card-title text-lg font-medium">packege List</h3>

          <a href="{{ route('about.create') }}" class="py-[10px] px-[16px] border bg-blue-500 !border-blue-500 text-white hover:bg-white hover:!text-blue-500 font-medium rounded">Create Packege</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>SL</th>


                <th>Message</th>


                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($about as $data)


              <tr>
                <td>{{ $loop->index + 1 }}</td>

                <td>{{ substr($data->message, 0 , 20)  }}...</td>



                <td class="space-x-1">
                  <a href="{{ route('about.edit', $data->id) }}" class="border p-2 text-sm rounded !border-blue-500 text-blue-500 hover:text-white hover:bg-blue-500"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="{{ route('about.delete', $data->id) }}" class="border p-2 text-sm rounded !border-red-500 text-red-500 hover:text-white hover:bg-red-500"><i class="fa-solid fa-trash"></i></a>
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
