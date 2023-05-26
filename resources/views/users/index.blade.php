@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    @can('add_users')
        <button type="button" class="btn btn-sm btn-primary createButton" data-attr="{{ route('users.create') }}" 
            data-bs-toggle="modal" data-bs-target="#exampleModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            Add new user
        </button>                
    @endcan
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <small class="text-muted">Usert List Management</small> 
    </div>
    <div class="card-body p-2">

        <table class="table table-sm table-hover p-2">
                    <thead>
                    <tr>
                        <th width="1%">#ID</th>
                        <th width="25%">Name</th>
                        <th>Email</th>
                        <th width="10%">Roles</th>
                        <th width="20%">Created</th>
                        <th width="5%"></th>    
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        @foreach($user->roles as $role)
                                            <button type="button" class="btn btn-sm btn-secondary p-1">
                                                {{ $role->name }}
                                            </button>
                                        @endforeach
                                    </div> 
                                </td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                    @can('show_users')
                                        <button type="button" class="btn btn-sm btn-secondary p-1 createButton" class="btn btn-sm btn-primary" 
                                            data-attr="{{ route('users.show', $user->id) }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Show
                                        </button>
                                    @endcan

                                    @can('edit_users')
                                        <a type="button" class="btn btn-sm btn-secondary p-1" href="{{ route('users.edit', $user->id) }}">
                                            Edit
                                        </a>
                                    @endcan

                                    @can('delete_users')
                                        <a type="button" class="btn btn-sm btn-secondary p-1" href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $user->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', ['user' => $user]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    @endcan
                                    </div>                     
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
    </table>

    <div class="d-flex">
        {!! $users->links() !!}
    </div>


    </div>
</div>

@endsection

@push('scripts')
<script>
    // display a modal (medium modal)
    $(document).on('click', '.createButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                console.log('init modal')
            },
            // return the result
            success: function(result) {
                $('#exampleModal').modal("show");
                $('#exampleModal .modal-body').html(result).show();
            },
            complete: function() {
                console.log('end modal')
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
            },
            timeout: 8000
        })
    });
</script>
@endpush