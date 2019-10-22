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
                            <a href="/surveys">Table Survey</a>
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
                        <a href="{{ route('surveys.create') }}" class="btn btn-primary btn-round ml-auto">
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
                                    <th>Status</th>
                                    <th>Nama Kelurahan</th>
                                    <th width="3px">RT</th>
                                    <th width="3px" >RW</th>
                                    <th width="3px">Pindah</th>
                                    <th width="3px">Meninggal</th>
                                    <th width="3px">Tidak Dikenal</th>
                                    <th width="3px">Ganda</th>
                                    <th width="3px">Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surveys as $survey)
                                <tr>
                                    <td>{{$survey->surveyor->name}} </td>
                                    <td>{{ date('d F Y', strtotime($survey->tanggal_survey ))}}
                                    <td>{!! $survey->TanggalSurveyLabel() !!}
                                    </td></td>
                                    <td>{{$survey->village->name }} </td>
                                    <td>{{$survey->rt}}</td>
                                    <td>{{$survey->rw}} </td>
                                    <td> {{ $survey->pindah }} </td>
                                    <td> {{ $survey->meninggal }} </td>
                                    <td> {{ $survey->tidak_diketahui }} </td>
                                    <td> {{ $survey->ganda }} </td>
                                    <td> {{ $total = $survey->pindah + $survey->meninggal  + $survey->tidak_diketahui + $survey->ganda }}  </td>
                                    <td>
                                        <div class="form-button-action">

                                                <a href="{{ route('surveys.edit', $survey->id) }}"  data-toggle="tooltip"
                                                class="btn btn-link btn-info" data-original-title="Edit">
                                                    <i class="fa fa-edit"></i></a>


                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Delete"
                                                    onclick="handleDelete( {{ $survey->id }} )">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="6">TOTAL ANOMALI</th>

                                    <th> {{ number_format( $survey->sum('pindah')) }}</th>
                                    <th> {{ number_format( $survey->sum('meninggal')) }}</th>
                                    <th> {{ number_format( $survey->sum('ganda')) }}</th>
                                    <th> {{ number_format( $survey->sum('tidak_diketahui')) }}</th>
                                    <th> {{ $total_anomali= $survey->sum('pindah') +
                                                            $survey->sum('meninggal') +
                                                            $survey->sum('tidak_diketahui') +
                                                            $survey->sum('ganda') }}</th>
                                </tr>
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

{{-- script delete surveyor --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteSurveyForm">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Data Survey</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="text-center text-bold"> Apakah anda ingin mengapus data Survey  </p>
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
@endsection


@section('scripts')

<script>
function handleDelete(id) {

	var form = document.getElementById('deleteSurveyForm')
	form.action = '/surveys/' + id

	$('#deleteModal').modal('show')
}
</script>

@endsection
