@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Show User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Show</li>
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
              <form action="{{ route('users.update', $user->id) }}" method="POST" role="form">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <p>{{ $user->id }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <p>{{ $user->name }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <p>{{ $user->email }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <p>{{ $user->address }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <p>{{ $user->phone }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <p>{{ $user->username }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <p>{{ $user->password }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Promotion Price</label>
                    <p>{{ $user->promotion_price }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                    <p>{{ $user->role }}</p>
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