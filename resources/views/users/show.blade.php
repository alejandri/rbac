
    <div class="bg-light p-2 rounded">
        <h3>User</h3>
        <hr>

        <div class="container mt-4">
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Roles: {{ $user->getRoleNames() }}
            </div>
        </div>

    </div>
  
