@extends('layout.admin')

@section('content')
	<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Comment</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Comment</li>
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
                      <th>Product ID</th>
                      <th>Rating</th>
                      <th>Content</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($comment as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->user_id }}</td>
                      <td>{{ $item->product_id }}</td>
                      <td>{{ $item->rating }}</td>
                      <td>{{ $item->content }}</td>
                      <td>
                        <form action="{{ route('comments.destroy',$item->id) }}" method="POST">

                          <a class="btn btn-info" href="{{ route('bills.show',$item->id) }}">Show</a>
                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?') " >Delete</button>
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