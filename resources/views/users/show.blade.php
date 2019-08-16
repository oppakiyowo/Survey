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
        </div>
   


@endsection