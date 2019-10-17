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
                            <h5 class="text-white op-9 mb-2">Rekapitulasi Hasil Survey Kependudukan </h5>
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                            <a href="#" class="btn btn-secondary btn-round">Tambah Data Survey</a>
                        </div>
                    </div>
                </div>
            </div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="lala" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10px">Jumlah RT Terverifikasi</th>
                                            <th>Jumlah Penduduk</th>
                                            <th>Penduduk Terverifikasi</th>
                                            <th> Pindah</th>
                                            <th> Meninggal </th>
                                            <th> Ganda</th>
                                            <th> Tidak Dikenal</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $jumlah_rt }}</td>
                                            <td>14.552</td>
                                            <td>{{ number_format( $penduduk_terverifikasi) }}</td>
                                            <td>{{$pindah}}</td>
                                            <td>{{$meninggal}}</td>
                                            <td>{{$ganda}}</td>
                                            <td>{{$tidak_diketahui}}</td>

                                        </tr>
                                    </tbody>
                                </table>
                                <div id="container" style="min-width: 1000px; height: 400px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>

             </div>
         </div>
    </div>
</div>
</div>
@endsection

@section ('scripts')
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script src="{{ asset('js/highchart.js') }}"></script>
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

<script>

function float2dollar(value){
    return "U$ "+(value).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}

Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Rekap Survey Kependudukan'
  },
  subtitle: {
    text: 'Kelurahan Dompak'
  },
  xAxis: {
    categories: [
      'Data Survey Penduduk Kelurahan Dompak',


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
    data: [14552],


  }, {
    name: 'Data Terverifikasi',
    data: [{{$penduduk_terverifikasi}}]

  }, {
    name: 'Data Anomali',
    data: [{{$total_anomali =( $pindah +  $meninggal + $tidak_diketahui + $ganda)}}]

  }]
});
</script>
@endsection

