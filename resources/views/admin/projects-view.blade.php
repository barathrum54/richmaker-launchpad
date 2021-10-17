@extends('admin.layout')

@section('adminContent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin_">Home</a></li>
              <li class="breadcrumb-item active">{{$project->name}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">{{$project->name}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="border p-2 form-group">
                      <label for="exampleInputEmail1">Project Name</label>
                      <h4 class="p-2">{{$project->name}}</h4>
                    </div>
                    <div class="border p-2 form-group">
                        <label for="exampleInputEmail1">Project Description</label>
                      <h4 class="p-2">{{$project->description}}</h4>
                      </div>
                    <div class="border p-2 form-group">
                      <label for="exampleInputPassword1">Ticker</label>
                      <h4 class="p-2">{{$project->ticker}}</h4>
                    </div>
                    <div class="border p-2 form-group">
                        <label for="exampleInputPassword1">Web Site</label>
                      <h4 class="p-2">{{$project->website}}</h4>
                      </div>
                      <div class="border p-2 form-group">
                        <label for="exampleInputPassword1">Cap</label>
                      <h4 class="p-2">{{$project->cap}}</h4>
                      </div>
                      <div class="border p-2 form-group">
                        <label for="exampleInputPassword1">Logo</label>
                        <br>
                      <img style="object-fit: cover;height:150px;width:150px;border-radius:50%" src="{{$project->logo}}">
                      </div>
                   
                  </div>
                 
              </div>
              </div>
            <div class="col-md-6">
  
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  </div>
@endsection
