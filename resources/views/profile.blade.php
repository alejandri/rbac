@extends('layouts.app')

@section('content')

<div class="container-fluid rounded bg-white card m-2 w-full">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{auth()->user()->name}}"></div>
                </div>
                <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter phone number" value="{{auth()->user()->email}}"></div>
                </div>
                <hr>
                <div class="row mt-3">
                    
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
           
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Roles</span></div> <hr>
                <ul>
                    @foreach(auth()->user()->roles as $rol)
                        <li class="lis">{{$rol->name}}</li>
                    @endforeach
                </ul>
                
            </div>
            <div class="p-3 py-2">
                <div class="d-flex justify-content-between align-items-center experience"><span>Permissions</span></div> <hr>
                <ul>
          
                    @foreach(Auth::user()->getPermissionsViaRoles() as $per)
                        <li class="lis">{{$per->name}}</li>
                    @endforeach
                </ul>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>




@endsection
