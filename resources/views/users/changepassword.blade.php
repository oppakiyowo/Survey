@extends('layouts.backend')
@section('content')


<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">CHANGE PASSWORD PANEL</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="{{ route('home') }}">
                            <i class="flaticon-home"></i>
                            </a>
                        </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}">Table User</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a>List</a>
                    </li>
                </ul>
              </div>
         </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change password</div>
<div class="card-body">

    <form class="form-horizontal" method="POST" action="{{ route('updatepassword')}}">
        @csrf
    <div class="form-group" >
        <label for="new-password" class="col-md-4 control-label">Current Password</label>
        <div class="col-md-6">
            <input id="current-password" type="password" class="form-control" name="current-password" required>
        </div>
    </div>

    <div class="form-group">
        <label for="new-password" class="col-md-4 control-label">New Password</label>
        <div class="col-md-6">
            <input id="new-password" type="password" class="form-control" name="new-password" required>
        </div>
    </div>

    <div class="form-group">
        <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>
        <div class="col-md-6">
            <input id="new-password-confirm" type="password" class="form-control" name="new-password-confirm" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Change Password
            </button>
         </div>
    </div>
    </form>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
