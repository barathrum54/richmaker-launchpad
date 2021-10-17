@extends('admin.layout')

@section('adminContent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin_">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <a name="" id="" class="btn btn-primary ml-2 mr-5" href="/admin_/add-project" role="button">New</a>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Projects</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Project Name
                    </th>
                    <th style="width: 30%">
                        Project Description
                    </th>
                    <th>
                        Project Ticker
                    </th>
                    <th style="width: 8%" class="text-center">
                        Project Cap
                    </th>
                    <th style="width: 8%" class="text-center">
                        Project Logo
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($projects as $item)
              <tr>
                <td>
                    {{$item->id}}
                </td>
                <td>
                    <a>
                        {{$item->name}}
                    </a>
                </td>
                <td>
                    {{$item->description}}
                </td>
                <td >
                    {{$item->ticker}}
                </td>
                <td >
                    {{$item->cap}}
                </td>
                <td >
                  {{$item->logo}}
              </td>
                <td class="project-actions text-right">
                 
                    <a class="btn btn-info btn-sm" href="/admin_/projects-edit/{{$item->id}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="/admin_/projects-delete/{{$item->id}}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>
            </tr>
              @endforeach
             
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
  </div>
    <!-- /.content -->
  </div>
@endsection
