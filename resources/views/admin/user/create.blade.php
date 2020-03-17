@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New user</li>
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
                <h3 class="card-title">New</h3>
              </div>
              @if ($errors->any())
                <div class="alert alert-danger">
                <strong>Warning!</strong> Please check your input code<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                </div>
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('users.store') }}" method="POST" role="form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                    <input type="text" name="role" class="form-control" placeholder="Role">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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