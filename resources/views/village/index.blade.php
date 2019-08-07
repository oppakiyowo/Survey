@extends ('layouts.backend')

@section('content')
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
        
                    <h4 class="page-title">DAFTAR KELURAHAN</h4>
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
                            <a href="/villages">Table Kelurahan</a>
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
                        <h4 class="card-title">Kelurahan List</h4>
                        <a href="#" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus">Tambah</i> </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="6px">NO</th>
                                    <th>Nama</th>
                                    <th width="10px">Jumlah Penduduk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th> </th>
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
        
        
