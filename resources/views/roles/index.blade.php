@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Roles</h1>
</div>

<div class="card">
    <div class="card-header">
        <small class="text-muted">Roles List Management</small> 
    </div>
    <div class="card-body p-2">

        <table class="table table-sm table-hover p-2">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">#ID</th>
                        <th scope="col" width="25%">Rol Name</th>
                        <th scope="col" width="25%">Permissions</th>
                        <th scope="col" width="20%">Created</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        
                     
                            <tr>
                                <th scope="row">{{ $role->id }}</th>
                                <td>{{ $role->name }}</td>
                                <td>
                                @if($role->getPermissionNames())
                                  @foreach($role->getPermissionNames() as $permission)
                                    <span class="badge badge-outline bg-secondary"> {{ $permission }}</span>
                                  @endforeach
                                @endif


                                </td>

                                <td>{{ $role->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
      </table>

 


    </div>
</div>



 

@endsection