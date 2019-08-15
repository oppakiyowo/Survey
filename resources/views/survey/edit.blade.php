@extends ('layouts.backend')
@section ('content')
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Panel Edit Data</h4>
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
                            <a href="{{route ('surveys.index') }}">Edit Data Survey</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                           List
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Data Survey</div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('surveys.update', $survey->id) }}" method="POST" enctype="multipart/form-data"> 
                                 @method ('PUT')
                                 @csrf    
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                            <label for="village">Nama Kelurahan  <span class="required-label">*</span> </label>
                                            <select name="village_id" id="village_id" class="form-control  @error('village_id') is-invalid @enderror"> 
                                                @foreach($villages as $village)
                                                <option value="{{ old('village') }} {{ $village->id }}" 
                                                        @if($village->id == $survey->village_id)
                                                        selected
                                                        @endif
                                                    > 
                                                {{ $village->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('village_id')
                                                <td><p class="text-danger">{{$message}}</p></td>
                                            @enderror
                                        </div>

                                       

                                        <div class="form-group">
                                                <label for="rt">RT <span class="required-label">*</span></label>
                                        <input type="number" name="rt" class="form-control  @error('rt') is-invalid @enderror" id="rt" value="{{ $survey->rt }}">
                                                <small id="rt" class="form-text text-muted">Isi dengan RT yang di survey (contoh : 001).</small>
                                                @error('rt')
                                                <td><p class="text-danger">{{$message}}</p></td>
                                                @enderror
                                        </div>			
                                        <div class="form-group">
                                            <label for="rw">RW <span class="required-label">*</span></label>
                                            <input type="number" name="rw" class="form-control  @error('rw') is-invalid @enderror" id="rw" value="{{ $survey->rw }}">
                                            <small id="rw" class="form-text text-muted">Isi dengan RW yang di survey (contoh : 001).</small>
                                            @error('rw')
                                                <td><p class="text-danger">{{$message}}</p></td>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-12 col-lg-6">	
                                        <div class="form-group">
                                                <label for="pindah">Pindah</label>
                                                <input type="number" name="pindah" class="form-control" id="pindah" value="{{ $survey->pindah }}">
                                                <small id="pindah" class="form-text text-muted">Isi dengan jumlah penduduk yang pindah.</small>
                                        </div>		

                                        <div class="form-group">
                                                <label for="meniggal">Meninggal</label>
                                                <input type="number" name="meninggal" class="form-control" id="meninggal" value="{{ $survey->meninggal }}">
                                                <small id="meningga" class="form-text text-muted">Isi dengan jumlah penduduk yang meninggal.</small>
                                        </div>

                                        <div class="form-group">
                                                <label for="tidak_diketahui">Tanpa Keterangan</label>
                                                <input type="number" name="tidak_diketahui" class="form-control" id="tidak_diketahui" value="{{ $survey->tidak_diketahui }}">
                                                <small id="tidak_diketahui" class="form-text text-muted">Isi dengan jumlah penduduk tanpa keterangan.</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="ganda">Ganda</label>
                                            <input type="number" name="ganda" class="form-control" id="ganda" value="{{ $survey->ganda }}">
                                            <small id="ganda" class="form-text text-muted">Isi dengan jumlah penduduk data ganda.</small>
                                    </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
    <div class="col-6 col-md-4">
                <div class="card">

                    <div class="form-group">
                            <label for="surveyor">Nama Surveyor  <span class="required-label">*</span> </label>
                            <select name="surveyor_id" id="surveyor_id" class="form-control  @error('surveyor_id') is-invalid @enderror"> 
                                @foreach($surveyors as $surveyor)
                                <option value="{{ old('surveyor') }} {{ $surveyor->id }}" 
                                        @if($surveyor->id == $survey->surveyor_id)
                                        selected
                                        @endif
                                    > 
                                {{ $surveyor->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('surveyor_id')
                            <td><p class="text-danger">{{$message}}</p></td>
                            @enderror
                    </div>
                    
                    <div class="card-body">
                        <div class="form-group">
                                <label for="tanggal_survey">Tanggal Survey</label>
                                <input type="text" class ="form-control" name="tanggal_survey" id="published_at" value="{{ old('tanggal_survey') }} {{  $survey->tanggal_survey }}">
                        </div>
                        </div>
                        <div class="card-action">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                                <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                    </div> 
            </div>
        </div>
    </div>
</div>
@endsection

