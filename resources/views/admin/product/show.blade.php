@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Show Product</h1>
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
              <form action="{{ route('products.update', $product->id) }}" method="POST" role="form">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <p>{{ $product->id }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <p>{{ $product->name }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category ID</label>
                    <p>{{ $product->category_id }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                    <p>{{ $product->size }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Color</label>
                    <p>{{ $product->color }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <p>{{ $product->quantity }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <p>{{ $product->price }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Promotion Price</label>
                    <p>{{ $product->promotion_price }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <p>{{ $product->description }}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Is Active</label>
                    <p>{{ $product->is_active }}</p>
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