@extends ('layouts.backend')

@section ('title')
    User Profile
@endsection

@section ('content')

<div class="main-panel">

        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">USERS PANEL</h4>
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
            <div class="col-md-8 col">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ Gravatar::src($user->email) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
            <div class="card-body ">
                <div class="user-profile text-center">
                    <div class="name">{{$user->name}}</div>
                    <div class="job">Frontend Developer</div>
                    <div class="desc">A man who hates loneliness</div>
                    <div class="social-media">
                        <a class="btn btn-info btn-twitter btn-sm btn-link" href="#">
                            <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                        </a>
                        <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
                            <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span>
                        </a>
                        <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#">
                            <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span>
                        </a>
                        <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
                            <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span>
                        </a>
                    </div>
                    <div class="view-profile">
                        <a href="#" class="btn btn-secondary btn-block">Change Profile</a>
                    </div>


                </div>
            </div>
            <div class="card-footer">
                <div class="row user-stats text-center">
                    <div class="col">
                        <div class="number">{{$user->surveys->count() }}</div>
                        <div class="title">Rekap Survey</div>
                    </div>
                    <div class="col">
                        <div class="number">25K</div>
                        <div class="title">Followers</div>
                    </div>
                    <div class="col">
                        <div class="number">134</div>
                        <div class="title">Following</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        </div>



@endsection
