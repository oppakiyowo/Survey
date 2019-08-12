<!-- Sidebar -->
<div class="sidebar">			
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img class="avatar-img rounded-circle" src="{{ Gravatar::src(Auth::user()->email) }}">
                    </div>

               
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                
                                    <h6 class="text-section" style="text-transform: uppercase;"> {{ Auth::user()->name }} </h6>
                                <span class="user-level"> <h6 class="text-section" style="text-transform: uppercase;">Admin</h6></span>
                                
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ ('/home') }}">
                                        <span class="sub-item">Backend</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Menu Bar</h4>
                    </li>
                    
                    <li class="nav-item">
                        
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Click Here</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="/surveys">
                                        <span class="sub-item">Data Survei</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/surveyors">
                                        <span class="sub-item">Data Surveyors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/villages">
                                        <span class="sub-item">Data Kelurahan</span>
                                    </a>
                                </li>
                                <li>
                                        <a href="/users">
                                            <span class="sub-item">Data Users</span>
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End Sidebar -->

    