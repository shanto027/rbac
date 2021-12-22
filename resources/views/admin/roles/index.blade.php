@extends('admin.layouts.master')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
        <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 text-left">
                    <h6>Role Management</h6> 
                </div>

                <div class="col-lg-6 text-right">
                    @can('role-create')
                        <a class="btn btn-outline-success btn-sm" href="{{ route('roles.create') }}"> New Role</a>
                    @endcan
                </div>
            </div>
            <hr>
            @if(session('message'))
                <div  class="alert {{ Session('alert-class', 'alert-success','alert-block') }}">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif
            <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
                </tr>
              </thead>
              <tbody> 
              @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td style="display: flex; justify-content: space-evenly;">
                                <a class="btn btn-outline-info btn-sm" href="{{ route('roles.show',$role->id) }}"><i class="far fa-eye"></i></a>
                                @can('role-edit')
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('roles.edit',$role->id) }}"><i class="far fa-edit"></i></a>
                                @endcan
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                    {!! Form::button("<i class='far fa-trash-alt'></i>", [
                                                'type'=>'submit', 
                                                'class' => 'btn btn-outline-danger btn-sm'
                                                ]) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
              </tbody> 
            </table>
          </div> 
        </div>
    </div>
        </div>
    </div>
</div> 
@endsection