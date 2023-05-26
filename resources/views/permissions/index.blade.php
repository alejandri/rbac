@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Permissions</h1>
</div>

<div class="card">
    <div class="card-header">
        <small class="text-muted">Permissions List Management</small> 
    </div>
    <div class="card-body p-2">

        <table class="table table-sm table-hover p-2">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">#ID</th>
                        <th scope="col" width="25%">Permission Name</th>
                        <th scope="col" width="20%">Created</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($permissions as $permission)
                        
                     
                            <tr>
                                <th scope="row">{{ $permission->id }}</th>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
      </table>

 


    </div>
</div>



 

@endsection