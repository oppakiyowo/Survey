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
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addVillage">
                            <i class="fa fa-plus"></i>
                            Tambah Kelurahan
                        </button>
                    </div>
                    {{-- add surveyor modal --}}
<div class="modal fade" id="addVillage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <form action="{{ route('villages.store') }}" method="POST">
                @csrf
                @method('POST')
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                        Tambah Data</span> 
                        <span class="fw-light">
                            Kelurahan
                        </span>
                    </h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama Kelurahan</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  />
                            </div>
                            <div class="form-group form-group-default">
                                <label>Kode Kelurahan</label>
                                <input type ="integer" name="code"  class="form-control @error('code') is-invalid @enderror"  />
                            </div>
                            <div class="form-group form-group-default">
                                <label>Total Penduduk Kelurahan</label>
                                <input type ="integer" name="total_penduduk"  class="form-control @error('total_penduduk') is-invalid @enderror"  />
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="modal-footer no-bd">
                    <button type="submit"  class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
                </div>
            </div>
        </div>
        </div>
    {{-- end of add surveyor modal --}}
                </div>
                <div class="card-body">
                    @if($villages->count() >0)
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="80px">Kode Kel</th>
                                    <th width=>Nama Kelurahan</th>
                                    <th width="">Jumlah Penduduk</th>
                                    <th width="20px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($villages as $village)
                                <tr>
                                    <th> {{ $village->code}} </th>
                                    <td> {{ $village->name}} </td>
                                    <td> {{ number_format ($village->total_penduduk) }} </td>
                                    <td>  
                                        <div class="form-button-action">
                                        <a href="#editVillage" 
                                            data-name="{{$village->name}}" 
                                            data-code="{{$village->code}}"  
                                            data-total_penduduk="{{$village->total_penduduk}}" 
                                            data-catid="{{$village->id}}"  
                                            data-toggle="modal"
                                        >            
                                        <button type="button" data-toggle="tooltip"
                                        class="btn btn-link btn-info" data-original-title="Edit">
                                            <i class="fa fa-edit"></i></button>
                                        </a>
                                            
                                        <button type="button" data-toggle="tooltip" title=""
                                            class="btn btn-link btn-danger" data-original-title="Delete"
                                            onclick="handleDelete( {{ $village->id }} )">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div> 
                                    </td>
                                </tr>
                                {{-- edit modal --}}
<div class="modal fade" id="editVillage" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('villages.update', $village->id) }}" data-remote="true" method="POST">
            @method('PUT')
            @csrf
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    New</span> 
                    <span class="fw-light">
                        Row
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <p class="small">Edit Data Kelurahan</p>
                    <div class="row">
                        <input type="hidden" name="catid" id="cat_id" value="">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama kelurahan</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"/>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Kode Kelurahan</label>
                                <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror"/>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Total Penduduk</label>
                                <input type="text" name="total_penduduk" id="total_penduduk" class="form-control @error('total_penduduk') is-invalid @enderror"/>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer no-bd">
                <button type="submit"  class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
            </div>
        </div>
    </div>
</div>
{{-- end of edit modal --}}  
{{-- script delete surveyor --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteVillageForm">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Surveyor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="text-center text-bold"> Apakah anda ingin mengapus data kelurahan  </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Tidak,Kembali</button>
                    <button type="summit" class="btn btn-danger">Ya,Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end delete Modal -->
                            @endforeach
                            </tbody>
                            <tfoot>
                                    <tr>
                                        <th colspan="2">TOTAL</th>
                                        <th> {{ number_format( $village->sum('total_penduduk')) }}</th>
                                        
                                    </tr>
                                </tfoot>
                        </table>
                        @else
                        <h3 class="text-center">Belum ada Data Kelurahan </h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 

@endsection

@section ('scripts')
<script>
        function handleDelete(id) {
    
            var form = document.getElementById('deleteVillageForm')
            form.action = '/villages/' + id
    
            $('#deleteModal').modal('show')
        }
    </script>
{{-- end delte script surveyor --}}

{{-- script edit surveyor --}}
<script type="text/JavaScript">
    $(function () {
        $("#editVillage").on("show.bs.modal", function (event) {
        
        var button = $(event.relatedTarget);
        var name = button.data("name");
        var code = button.data("code");
        var total_penduduk = button.data("total_penduduk");
        var cat_id = button.data("catid");
        var modal = $(this);
        
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #code').val(code);
        modal.find('.modal-body #total_penduduk').val(total_penduduk);
        modal.find('.modal-body #cat_id').val(cat_id);
    
        });
    });
    </script>
{{-- end script edit surveyor --}}
@endsection
