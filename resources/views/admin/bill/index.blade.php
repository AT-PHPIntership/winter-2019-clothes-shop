@extends('layout.admin')

@section('content')
	<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Bill</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Bill</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User ID</th>
                      <th>Address</th>
                      <th>Total</th>
                      <th>ETD</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($bills as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->user_id }}</td>
                      <td>{{ $item->address }}</td>
                      <td>{{ $item->total }}</td>
                      <td>{{ $item->etd }}</td>
                      <td>
                        <form action="{{ route('bills.destroy',$item->id) }}" method="POST">

                          <a class="btn btn-info" href="{{ route('bills.show',$item->id) }}">Show</a>

                        </form>
                      </td>
                    </tr>
                    @endforeach


                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>

@endsection