@extends('layouts.backend')

@section('content')

<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Profil Pengguna</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                <i class="flaticon-home"></i>
                                </a>
                            </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">User</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Edit Profil</a>
                        </li>
                    </ul>
                </div>
              <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">

                    <form action="{{ route('users.update',$user->id)  }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Password" required>
                    </div>

                     <button class="btn btn-success btn-md" type="submit">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
