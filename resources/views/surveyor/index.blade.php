@extends ('layouts.backend')

@section('content')
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
        
                    <h4 class="page-title">DAFTAR SURVEYORS</h4>
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
                            <a href="/surveyors">Table Surveyors</a>
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
                        <h4 class="card-title">Surveyors List</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addSurveyor">
                            <i class="fa fa-plus"></i>
                            Tambah Surveyor
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="4px">NO</th>
                                    <th>Nama</th>
                                    <th>Kontak</th>
                                    <th width="6px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($surveyors as $surveyor)
                              
                                <tr>
                                    <td> {{ $no++ }} </td>
                                    <td> {{$surveyor->name}} </td>
                                    <td> <a href="https://api.whatsapp.com/send?phone={{$surveyor->kontak}}&text=Halo"> +{{$surveyor->kontak}} </a> </td>
                               
                                    <td>  
                                        <div class="form-button-action">
                                                <a href="#editSurveyor" 
                                                    data-name="{{$surveyor->name}}" 
                                                    data-kontak="{{$surveyor->kontak}}"  
                                                    data-catid="{{$surveyor->id}}"  
                                                    data-toggle="modal"
                                                >            
                                                <button type="button" data-toggle="tooltip"
                                                class="btn btn-link btn-info" data-original-title="Edit">
                                                    <i class="fa fa-edit"></i></button>
                                                </a>
                                                    
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Delete"
                                                    onclick="handleDelete( {{ $surveyor->id }} )">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 


{{-- edit modal --}}
<div class="modal fade" id="editSurveyor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('surveyors.update', $surveyor->id) }}" data-remote="true" method="POST">
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
                <p class="small">Edit Data Surveyor</p>
                    <div class="row">
                        <input type="hidden" name="catid" id="cat_id" value="">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama Surveyor</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"/>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Kontak Surveyor</label>
                                <input type="text" name="kontak" id="kontak" class="form-control @error('kontak') is-invalid @enderror"/>
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

{{-- add surveyor modal --}}
<div class="modal fade" id="addSurveyor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="{{ route('surveyors.store') }}" method="POST">
            @csrf
            @method('POST')
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    Tambah Data</span> 
                    <span class="fw-light">
                        Surveyor
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
                            <label>Nama Surveyor</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  />
                        </div>
                       

                        <div class="form-group form-group-default">
                            <label>Nomor Handphone</label>
                            <input type ="integer" class="number @error('kontak') is-invalid @enderror" name="kontak" value="+62" />
                        
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

<!-- delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteSurveyorForm">
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
                    <p class="text-center text-bold"> Apakah anda ingin mengapus Surveyor  </p>
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

@endsection
        
@section ('scripts')
{{-- script edit surveyor --}}
<script type="text/JavaScript">
    $(function () {
        $("#editSurveyor").on("show.bs.modal", function (event) {
        
        var button = $(event.relatedTarget);
        var name = button.data("name");
        var kontak = button.data("kontak");
        var cat_id = button.data("catid");
        var modal = $(this);
        
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #kontak').val(kontak);
        modal.find('.modal-body #cat_id').val(cat_id);
    
        });
    });
    </script>
{{-- end script edit surveyor --}}

{{-- otomatis field +62 untuk nomor telepon --}}
<script>
    $('input.number').keyup(function(){
           if (
               ($(this).val().length > 0) && ($(this).val().substr(0,3) != '+62')
               || ($(this).val() == '')
               ){
               $(this).val('+62');    
           }
       });
       
   </script>
{{-- end otomatis field +62 untuk nomor telepon --}}

{{-- add surveyor --}}
<script type="text/JavaScript">
    $(function () {
      $("#addSurveyor").on("show.bs.modal", function (event) {
       
    });
});
</script>
{{-- end add surveyor --}}

{{-- script delete surveyor --}}
<script>
        function handleDelete(id) {
    
            var form = document.getElementById('deleteSurveyorForm')
            form.action = '/surveyors/' + id
    
            $('#deleteModal').modal('show')
        }
    </script>
{{-- end delte script surveyor --}}

@endsection

