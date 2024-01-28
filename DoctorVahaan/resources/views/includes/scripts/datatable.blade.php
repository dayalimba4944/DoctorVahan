@php
if (isset($route_as_url))
{
    $url = $route;
}
else
{
    $url = route($route);
}
@endphp
<script>
    $(function() {
        $('{{$table}} thead tr')
        .clone(false) 
        .addClass('filters')
        .appendTo('{{$table}} thead');
        $('{{$table}}').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{$url}}',
            columns: [@foreach($columns as $column) {'data':'{{$column}}','name':'{{$column}}'}, @endforeach],
            columnDefs: [
              { className: "dt-head-center", targets: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ] }
            ],
             language: {
            searchPlaceholder: "Search for all fields"
        },
            scrollX: true,
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();
     
                // For each column
                api
                    .columns()
                    .eq(0)
                    .each(function (colIdx) {
                        if(colIdx!==5){
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<input type="text" placeholder="' + title + '" />');
     
                        // On every keypress in this input
                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
 
                        // Get the search value
                        $(this).attr('title', $(this).val());
                        var regexr = '({search})'; //$(this).parents('th').find('select').val();

                        var cursorPosition = this.selectionStart;
                        // Search the column for that value
                        api
                            .column(colIdx)
                            .search(
                                this.value != ''
                                    ? regexr.replace('{search}', '(((' + this.value.replace(/\s/g, '') + ')))')
                                    : '',
                                this.value != '',
                                this.value == ''
                            )
                            .draw();
 
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                    }
                });
            },
            "drawCallback": function( settings ) {
            var rows = this.fnGetData();
            if (rows.length === 0 )
            {
                $('#print_export').hide()
            }
            else
            {
                $('#print_export').show()
            }
        }
        });
    });
</script>
