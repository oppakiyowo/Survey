@extends ('layouts.backend')

@section ('title')
Penyerahan Data Surveys
@endsection

@section('content')
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">

                    <h4 class="page-title">DAFTAR PENYERAHAN DATA SURVEYS</h4>
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
                            <a href="datasurveys">Table Data Surveys</a>
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
                        <h4 class="card-title">data surveys List</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#adddatasurvey">
                            <i class="fa fa-plus"></i>
                            Tambah datasurvey
                        </button>
                    </div>
                    {{-- add datasurvey modal --}}
<div class="modal fade" id="adddatasurvey" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <form action="{{ route('datasurveys.store') }}"  enctype="multipart/form-data" method="POST">
                @csrf
                @method('POST')
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                        Tambah Data</span>
                        <span class="fw-light">
                            datasurvey
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
                                <label>Total Anomali</label>
                                <input type="text" name="total_anomali" class="form-control @error('total_anomali') is-invalid @enderror"  />
                            </div>


                            <div class="form-group form-group-default">
                                <label>Total Verifikasi</label>
                                <input type="text" name="total_terverifikasi" class="form-control @error('total_terverifikasi') is-invalid @enderror"  />
                            </div>

                            <div class="form-group">
                                    <label for="tanggal_penyerahan ">Tanggal Penyerahan <span
                                            class="required-label">*</span></label>
                                    <input type="date" class="form-control  @error('tanggal_penyerahan') is-invalid @enderror"
                                        name="tanggal_penyerahan" id="published_at" value="{{ old('tanggal_penyerahan') }}">
                                    @error('tanggal_penyerahan')
                                    <td>
                                        <p class="text-danger">{{$message}}</p>
                                    </td>
                                    @enderror
                                </div>

                                <div class="form-group">
                                        <label for="image"> Image </label>
                                        <input type="file" class="form-control  @error('image')  is-invalid @enderror" name="image" id="image" value=" {{ old('image') }}">
                                        @error('image')
                                        <td><p class="text-danger">{{$message}}</p></td>
                                        @enderror
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
    {{-- end of add datasurvey modal --}}
                </div>
                <div class="card-body">
                 @if($datasurveys->count()>0)
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="4px">NO</th>
                                    <th>Total Anomali</th>
                                    <th>Total Terverikasi</th>
                                    <th>Tanggal Penyerahan</th>

                                    <th width="6px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($datasurveys as $datasurvey)

                                <tr>

                                    <td> {{ $no++ }} </td>
                                    <td> {{ number_format  ($datasurvey->total_anomali) }} </td>
                                    <td> {{number_format  ($datasurvey->total_terverifikasi) }} </td>
                                    <td> {{ $datasurvey->tanggal_penyerahan }}</td>



                                    <td>
                                        <div class="form-button-action">
                                                {{-- <a href="#editdatasurvey"
                                                    data-name="{{$datasurvey->name}}"
                                                    data-kontak="{{$datasurvey->kontak}}"
                                                    data-catid="{{$datasurvey->id}}"
                                                    data-toggle="modal"
                                                > --}}
                                                <button type="button" data-toggle="tooltip"
                                                class="btn btn-link btn-info" data-original-title="Edit">
                                                    <i class="fa fa-edit"></i></button>
                                                </a>

                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Delete"
                                                    onclick="handleDelete( {{ $datasurvey->id }} )">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th colspan="1">TOTAL Penyerahan</th>
                                    <th> {{ number_format( $datasurveys->sum('total_anomali')) }}</th>
                                    <th> {{ number_format( $datasurveys->sum('total_terverifikasi')) }}</th>
                                    <th> </th>

                                </tr>
                                </tfoot>


                            </table>
 {{-- edit modal --}}
<div class="modal fade" id="editdatasurvey" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    {{-- <form action="{{ route('datasurveys.update', $datasurvey->id) }}" data-remote="true" method="POST"> --}}
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
            <p class="small">Edit Data datasurvey</p>
                <div class="row">
                    <input type="hidden" name="catid" id="cat_id" value="">
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>Nama datasurvey</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>Kontak datasurvey</label>
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


<!-- delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deletedatasurveyForm">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus data survey</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="text-center text-bold"> Apakah anda ingin mengapus data survey  </p>
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

                            </tbody>
                            @else
                            <h3 class="text-center">Belum Ada Data datasurveys</h3>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection

@section ('scripts')
{{-- script edit datasurvey --}}
<script type="text/JavaScript">
    $(function () {
        $("#editdatasurvey").on("show.bs.modal", function (event) {

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
{{-- end script edit datasurvey --}}

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

{{-- add datasurvey --}}
<script type="text/JavaScript">
    $(function () {
      $("#adddatasurvey").on("show.bs.modal", function (event) {

    });
});
</script>
{{-- end add datasurvey --}}

{{-- script delete datasurvey --}}
<script>
        function handleDelete(id) {

            var form = document.getElementById('deletedatasurveyForm')
            form.action = '/datasurveys/' + id

            $('#deleteModal').modal('show')
        }
    </script>
{{-- end delte script datasurvey --}}

@endsection

