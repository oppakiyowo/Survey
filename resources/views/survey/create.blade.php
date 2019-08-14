@extends ('layouts.backend')
@section ('content')
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Panel Tambah Data</h4>
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
                            <a href="{{route ('surveys.create') }}">Tambah Data Survey</a>
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
                                <div class="card-title">Tambah Data Survey</div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('surveys.store') }}" method="POST" enctype="multipart/form-data"> 
                                 @csrf    
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                            <label for="village">Nama Kelurahan  <span class="required-label">*</span> </label>
                                            <select name="village" id="village" class="form-control  @error('village') is-invalid @enderror"> 
                                                @foreach($villages as $village)
                                                <option value="{{ old('village') }} {{ $village->id }}" 
                                                    
                                                    > 
                                                {{ $village->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                                <label for="surveyor">Nama Surveyor  <span class="required-label">*</span> </label>
                                                <select name="surveyor" id="surveyor" class="form-control"> 
                                                    @foreach($surveyors as $surveyor)
                                                    <option value="{{ old('surveyor') }} {{ $surveyor->id }}" 
                                                        
                                                        > 
                                                    {{ $surveyor->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label for="rt">RT <span class="required-label">*</span></label>
                                                <input type="text" name="rt" class="form-control  @error('rt') is-invalid @enderror" id="rt">
                                                <small id="rt" class="form-text text-muted">Isi dengan RT yang di survey (contoh : 001).</small>
                                                @error('rt')
                                                    <td><p class="text-danger">{{$message}}</p></td>
                                                @enderror
                                        </div>			
                                        <div class="form-group">
                                            <label for="rw">RW <span class="required-label">*</span></label>
                                            <input type="text" name="rw" class="form-control  @error('rw') is-invalid @enderror" id="rt" id="rw">
                                            <small id="rw" class="form-text text-muted">Isi dengan RW yang di survey (contoh : 001).</small>
                                            @error('rw')
                                                    <td><p class="text-danger">{{$message}}</p></td>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-12 col-lg-6">	
                                        <div class="form-group">
                                                <label for="pindah">Pindah</label>
                                                <input type="text" name="pindah" class="form-control" id="pindah">
                                                <small id="pindah" class="form-text text-muted">Isi dengan jumlah penduduk yang pindah.</small>
                                        </div>		

                                        <div class="form-group">
                                                <label for="ganda">Ganda</label>
                                                <input type="text" name="ganda" class="form-control" id="ganda">
                                                <small id="ganda" class="form-text text-muted">Isi dengan jumlah penduduk data ganda.</small>
                                        </div>

                                        <div class="form-group">
                                                <label for="meniggal">Meninggal</label>
                                                <input type="text" name="meninggal" class="form-control" id="meninggal">
                                                <small id="meningga" class="form-text text-muted">Isi dengan jumlah penduduk yang meninggal.</small>
                                        </div>

                                        <div class="form-group">
                                                <label for="tidak_diketahui">Tanpa Keterangan</label>
                                                <input type="text" name="tidak_diketahui" class="form-control" id="tidak_diketahui">
                                                <small id="tidak_diketahui" class="form-text text-muted">Isi dengan jumlah penduduk tanpa keterangan.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
    <div class="col-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanggal_survey ">Tanggal Survey <span class="required-label">*</span></label>
                            <input type="date" class="form-control  @error('rw') is-invalid @enderror" name="tanggal_survey" id="published_at" value="{{ old('tanggal_survey') }}">
                            @error('tanggal_survey')
                                     <td><p class="text-danger">{{$message}}</p></td>
                            @enderror
                        </div> 
                        </div>
                        <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                    </div> 
            </div>
        </div>
    </div>
</div>
@endsection

