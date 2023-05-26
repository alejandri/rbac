<div class="container">

        <div class="bg-light">
          

            <div class="card">
                <div class="card-header">
                    <small class="text-muted"> Add new user and assign role.</small> 
                </div>
                <div class="card-body p-0">
           
                
                <div class="bg-white p-4 rounded">
  

        <div class="container">
        <form method="POST" action="{{route('users.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <!-- <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ old('username') }}"
                        type="text" 
                        class="form-control" 
                        name="username" 
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div> -->

                <button type="submit" class="btn btn-primary">Save user</button>
               
            </form>
        </div>

    </div>

                
                </div>
            </div>


    

        </div>
  
    
  </div>

 



