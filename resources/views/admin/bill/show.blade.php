@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Show Bill</h1>
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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('bills.update', $bill->id) }}" method="POST" role="form">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <p>{{ $bill->id }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User ID</label>
                    <p>{{ $bill->user_id }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <p>{{ $bill->address }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <p>{{ $bill->total }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ETD</label>
                    <p>{{ $bill->etd }}</p>
                  </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->

            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection