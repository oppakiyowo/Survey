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
                                        <span class="sub-item">Rekap Keselurahan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('rekap_air_raja')}}">
                                        <span class="sub-item">Rekap Air Raja</span>
                                    </a>

                                    <a href="{{route('rekap_batu_ix')}}">
                                            <span class="sub-item">Rekap Batu IX</span>
                                     </a>

                                     <a href="{{route('rekap_bukit_cermin')}}">
                                            <span class="sub-item">Rekap Bukit Cermin</span>
                                    </a>

                                    <a href="{{route('rekap_dompak')}}">
                                        <span class="sub-item">Rekap Dompak</span>
                                    </a>

                                    <a href="{{route('rekap_kamboja')}}">
                                            <span class="sub-item">Rekap Kamboja</span>
                                        </a>

                                    <a href="{{route('rekap_kampung_baru')}}">
                                            <span class="sub-item">Rekap kampung</span>
                                        </a>

                                    <a href="{{route('rekap_kampung_bugis')}}">
                                            <span class="sub-item">Rekap Kampung Bugis</span>
                                        </a>

                                    <a href="{{route('rekap_kampung_bulang')}}">
                                            <span class="sub-item">Rekap Kampung Bulang</span>
                                        </a>

                                    <a href="{{route('rekap_melayu_kota_piring')}}">
                                            <span class="sub-item">Rekap Melayu Kota Piring</span>
                                        </a>

                                    <a href="{{route('rekap_penyengat')}}">
                                            <span class="sub-item">Rekap Penyengat</span>
                                        </a>

                                    <a href="{{route('rekap_pinang_kencana')}}">
                                            <span class="sub-item">Rekap Pinang Kencana</span>
                                        </a>

                                    <a href="{{route('rekap_sei_jang')}}">
                                            <span class="sub-item">Rekap Sei Jang</span>
                                        </a>

                                    <a href="{{route('rekap_senggarang')}}">
                                            <span class="sub-item">Rekap Senggarang</span>
                                        </a>

                                    <a href="{{route('rekap_tanjung_ayun_sakti')}}">
                                            <span class="sub-item">Rekap Tanjung Ayun Sakti</span>
                                        </a>

                                    <a href="{{route('rekap_tanjung_pinang_barat')}}">
                                            <span class="sub-item">Rekap Tanjung_pinang_barat</span>
                                        </a>

                                    <a href="{{route('rekap_tanjung_pinang_kota')}}">
                                            <span class="sub-item">Rekap Tanjung Pinang Kota</span>
                                        </a>

                                    <a href="{{route('rekap_tanjung_pinang_timur')}}">
                                            <span class="sub-item">Rekap Tanjung Pinang Timur</span>
                                        </a>

                                        <a href="{{route('rekap_tanjung_unggat')}}">
                                                <span class="sub-item">Rekap Tanjung Unggat</span>
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
                            <p>Daftar Survey Kelurahan</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href={{route('batu_ix')}}>
                                        <span class="sub-item">Kelurahan Batu IX</span>
                                    </a>
                                </li>
                                <li>
                                    <a href={{route('dompak')}}>
                                        <span class="sub-item">Kelurahan Dompak</span>
                                    </a>
                                </li>
                                <li>
                                    <a href={{route('kp_bulang')}}>
                                        <span class="sub-item">Kelurahan Kampung Bulang</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <li class="nav-item">
                                <a href="/surveys">
                                <i class="fas fa-copy"></i>
                                    <p>Data Survei</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                    <a href="/surveyors">
                                    <i class="fas fa-user-friends"></i>
                                        <p>Data Surveyors</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                    <a href="/villages">
                                    <i class="fas fa-university"></i>
                                        <p>Data Kelurahan</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="/users">
                                    <i class="fas fa-user"></i>
                                    <p>Data Pengguna</p>
                                </a>
                            </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End Sidebar -->

