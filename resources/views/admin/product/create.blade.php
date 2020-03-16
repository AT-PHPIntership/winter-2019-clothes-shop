@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Product</li>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('products.store') }}" method="POST" role="form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <select name="category_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    @foreach ($category as $item)
                        <option value = "{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                    <input type="text" name="size" class="form-control" placeholder="Size">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Color</label>
                    <input type="text" name="color" class="form-control" placeholder="Color">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Promotion Price</label>
                    <input type="text" name="promotion_price" class="form-control" placeholder="Promotion price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Is Active</label>
                    <input type="text" name="is_active" class="form-control" placeholder="Is Active">
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