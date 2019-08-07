@extends ('layouts.backend')

@section('content')
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
        
                    <h4 class="page-title">DAFTAR HASIL SURVEY</h4>
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
                            <a href="/surveyors">Table Survey</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a>List</a>
                        </li>
                    </ul>
                </div>
                
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Hasil Survey List</h4>
                        <a href="#" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus">Tambah</i> </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>                               
                                    <th>Nama Surveyor</th>
                                    <th>Tanggal Survey</th>
                                    <th>Nama Kelurahan</th>
                                    <th width="3px">RT</th>
                                    <th width="3px" >RT</th>
                                    <th width="3px">Pindah</th>  
                                    <th width="3px">Meninggal</th>  
                                    <th width="3px">Ganda</th>  
                                    <th width="3px">Tidak Diketahui</th>  
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
@endsection
        
        

