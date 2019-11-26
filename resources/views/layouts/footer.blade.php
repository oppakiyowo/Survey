
<footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://sm-performa.co.id/">
                            Sinergi Multi Performa
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
 </footer>
<!--   Core JS Files   -->


<script src="{{ asset ('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset ('assets/js/core/bootstrap.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
<!-- jQuery Scrollbar -->
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
<!-- jQuery Sparkline -->
<script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
<!-- Chart Circle -->
<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<!-- jQuery Vector Maps -->
<script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<!-- Atlantis JS -->
<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>

<script src="{{ asset('js/flatpicker.js') }}"></script>
{{-- package select2 for category and flatpicker for date & time --}}
<script>
        flatpickr('#published_at',{
        enableTime: true,
        enableSeconds: true
        })

        $(document).ready(function() {
            $('.tags-selector').select2();
        });
    </script>
<script>
Circles.create({
    id:'circles-1',
    radius:45,
    value:60,
    maxValue:100,
    width:7,
    text: 5,
    colors:['#f1f1f1', '#FF9E27'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
})

Circles.create({
    id:'circles-2',
    radius:45,
    value:70,
    maxValue:100,
    width:7,
    text: 36,
    colors:['#f1f1f1', '#2BB930'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
})

Circles.create({
    id:'circles-3',
    radius:45,
    value:40,
    maxValue:100,
    width:7,
    text: 12,
    colors:['#f1f1f1', '#F25961'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
})

// var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

// var mytotalIncomeChart = new Chart(totalIncomeChart, {
//     type: 'bar',
//     data: {
//         labels: ["Senin", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
//         datasets : [{
//             label: "Total Income",
//             backgroundColor: '#ff9e27',
//             borderColor: 'rgb(23, 125, 255)',
//             data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
//         }],
//     },
//     options: {
//         responsive: true,
//         maintainAspectRatio: false,
//         legend: {
//             display: false,
//         },
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     display: false //this will remove only the label
//                 },
//                 gridLines : {
//                     drawBorder: false,
//                     display : false
//                 }
//             }],
//             xAxes : [ {
//                 gridLines : {
//                     drawBorder: false,
//                     display : false
//                 }
//             }]
//         },
//     }
// });

// $('#lineChart').sparkline([105,103,123,100,95,105,115], {
//     type: 'line',
//     height: '70',
//     width: '100%',
//     lineWidth: '2',
//     lineColor: '#ffa534',
//     fillColor: 'rgba(255, 165, 52, .14)'
// });
</script>

<script >
        $(document).ready(function() {
            $('#basic-datatables').DataTable({
            });

            $('#multi-filter-select').DataTable( {
                "pageLength": 5,
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                                );

                            column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                        } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {

            });
        });
    </script>
</body>
</html>
