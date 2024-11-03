@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Appointment List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Appointment List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card !py-10">
        <div class="card-header">
          <h3 class="card-title">Appointment List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>No. of Adult</th>
                <th>No. of Child</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Room</th>
                <th>Special Request</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $data)


              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->adult }}</td>
                <td>{{ $data->child }}</td>
                <td>{{ $data->checkIn }}</td>
                <td>{{ $data->checkOut }}</td>
                <td>{{ $data->room }}</td>
                <td>{{ $data->specialRequest ? $data->specialRequest : "N/A" }}</td>
                <td>{{ $data->status }}</td>
                <td>
                    @if ($data->status == "pending")
                        <a href="{{ route("appointment.reject", $data->id) }}" class="border p-2 text-sm border-red-500 text-white hover:!text-red-600 hover:!bg-white bg-red-600">Reject</a>
                        <a href="{{ route("appointment.approve", $data->id) }}" class="border p-2 text-sm border-green-500 text-white hover:!text-green-600 hover:!bg-white bg-green-600">Approve</a>
                    @elseif($data->status == "approved")
                    <a href="{{ route("appointment.reject", $data->id) }}" class="border p-2 text-sm border-red-500 text-white hover:!text-red-600 hover:!bg-white bg-red-600">Reject</a>
                    @else
                    <a href="{{ route("appointment.approve", $data->id) }}" class="border p-2 text-sm border-green-500 text-white hover:!text-green-600 hover:!bg-white bg-green-600">Approve</a>
                    @endif


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
