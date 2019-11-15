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
                        <h4 class="card-title">Rekap Hasil Masing - Masing</h4>

                    </div>
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
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>

                                    <th>Nama</th>
                                    <th>Kontak</th>
                                    <th>RT Tersurvey</th>
                                    <th>Penduduk Tersurvey</th>
                                    <th>Penduduk Anomali</th>

                                </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td> {{$surveyor->name}} </td>
                                <td><a href="https://api.whatsapp.com/send?phone={{$surveyor->kontak}}&text=Halo"> <i class="fab fa-whatsapp"> </i> +{{$surveyor->kontak}} </a> </td>
                                <td> {{$surveyor->surveys->count() }}</td>
                                <td> {{ number_format( $penduduk_asli) }}</td>
                                <td>
                                    {{ $total_anomali= $pindah + $meninggal + $ganda + $tidak_diketahui }}

                                </td>

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



