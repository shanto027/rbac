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
                    <h6>User Info</h6> 
                </div> 
                    <div class="col-lg-6 text-right">
                        @can('user-create')
                            <a class="btn btn-outline-success btn-sm" href="{{ route('users.create') }}"> New user</a>
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
            <table class="table table-striped dataex-html5-selectors">
              <thead>
                <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
                </tr>
              </thead>
              <tbody> 
              @foreach ($data as $key => $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                            @if($v == 'Admin')
                                <label class="badge bg-info">{{ $v }}</label>
                            @elseif($v == 'Agent') 
                            <label class="badge bg-primary">{{ $v }}</label>
                            @else
                            <label class="badge bg-warning">{{ $v }}</label>
                            @endif   
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <!-- <a class="btn btn-outline-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="far fa-eye"></i></a> -->
                        @can('user-edit')
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="far fa-edit"></i></a>
                        @endcan
                        @can('user-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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