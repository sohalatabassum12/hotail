@extends('master')
@section('content')
<div class="content-wrapper mt-5 pb-5">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
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
