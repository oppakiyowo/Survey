@extends('layouts.backend')
@section ('title')
Home | Page
@endsection
@section('content')
<div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                            <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                            <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row mt--2">
                    <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Overall statistics</div>
                                <div class="card-category">Daily information about statistics in system</div>
                                <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-1"></div>
                                        <h6 class="fw-bold mt-3 mb-0">New Users</h6>
                                    </div>
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-2"></div>
                                        <h6 class="fw-bold mt-3 mb-0">Sales</h6>
                                    </div>
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-3"></div>
                                        <h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Total income & spend statistics</div>
                                <div class="row py-3">
                                 
                                    <div class="col-md-4 d-flex flex-column justify-content-around">
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-success op-8">Jumlah RT Terverifikasi</h6>
                                            <h3 class="fw-bold"> {{ $jumlah_rt }}</h3>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-danger op-8">Total Anomali</h6>
                                            <h3 class="fw-bold">{{$total_anomali =( $pindah +  $meninggal + $tidak_diketahui + $ganda)}}</h3>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-8">
                                            <div>
                                                <h6 class="fw-bold text-uppercase text-success op-8">Jumlah Penduduk Pindah</h6>
                                                <h3 class="fw-bold"> {{ $pindah }}</h3>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-uppercase text-success op-8">Jumlah Penduduk Meninggal</h6>
                                                <h3 class="fw-bold"> {{ $meninggal }}</h3>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-uppercase text-success op-8">Jumlah Penduduk tidak Diketahui</h6>
                                                <h3 class="fw-bold"> {{ $tidak_diketahui }}</h3>
                                             </div>
                                             <div>
                                                    <h6 class="fw-bold text-uppercase text-success op-8">Jumlah Penduduk Ganda</h6>
                                                    <h3 class="fw-bold"> {{ $ganda }}</h3>
                                                 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                                <div class="table-responsive">
                                        <table id="lala" class="display table table-striped table-hover">
                                            <script>
                                            $(document).ready(function() {
    $('#lala').DataTable( {
        pages :'fals'
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
                                            </script>
                                            
                                            <thead>
                                                <tr>
                                                    <th width="10px">Jumlah RT Terverifikasi</th>
                                                    <th>Jumlah Penduduk</th>
                                                    <th>Penduduk Terverifikasi</th>
                                                    <th> Pindah</th>
                                                    <th> Meninggal </th>
                                                    <th> Tidak Diketahui</th>
                                                    <th> Ganda</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $jumlah_rt }}</td>
                                                    <td>275.333</td>
                                                    <td>{{ number_format( $penduduk_terverifikasi) }}</td>
                                                    <td>{{$pindah}}</td>
                                                    <td>{{$meninggal}}</td>
                                                    <td>{{$tidak_diketahui}}</td>
                                                    <td>{{$ganda}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>      
                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                            
                        </div>
                    </div>
                </div>
@endsection

@section ('scripts')
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script src="{{ asset('js/highchart.js') }}"></script>
<script>

function float2dollar(value){
    return "U$ "+(value).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}

Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Monthly Average Rainfall'
  },
  subtitle: {
    text: 'Source: WorldClimate.com'
  },
  xAxis: {
    categories: [
      'Data Survey Penduduk Kota Tanjungpinang',
      
      
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jiwa'
    }
    
  },
  
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:f} </b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.09,
      borderWidth: 0
    }
  },
  colors: [
'#4572A7', 
'#89A54E', 
'#AA4643', 


],

  series: [{
    name: 'Total Penduduk',
    data: [275333],
    

  }, {
    name: 'Data Terverifikasi',
    data: [{{$penduduk_terverifikasi}}]

  }, {
    name: 'Data Anomali',
    data: [{{$total_anomali}}]

  }]
});
</script>
@endsection

