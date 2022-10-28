@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card"><br><br>
                    <center>
                        <img class="avatar-xl rounded-circle" src="{{ asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title"><strong>Name :</strong> {{$adminData->name}}</h4>
                        <hr>
                        <h4 class="card-title"><strong>Email :</strong> {{$adminData->email}}</h4>
                        <hr>
                        <button class="btn btn-primary btn-sm waves-effect waves-light">Edit Profile</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection