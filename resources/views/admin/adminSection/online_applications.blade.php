@extends('masterAdmin')
@section('onlineApplications')

<head>

</head>
<body>

<div>
    <a href=""> Dashboard</a>
</div>
<br><br>

<h2 class="text-center">Online Applicatrion Table</h2>



<div style="overflow-x:auto;">
<table id="example" class="display" style="width:100%">

  <thead>
    <tr>
      <th>Id</th>
      <th>Student Name</th>
      <th>Want to Admitted in</th>
      <th>Father Name</th>
      <th>Father Phone</th>
      <th>Current Address</th>
      <th >Action</th>
    </tr>
  </thead>
    
<tbody>

@foreach($onlineAdmInfo as $info)
    <tr>
        <td>{{ $info->id }}</td>
        <td>{{ $info->studentname_in_english }}</td>
        <td>{{ $info->seeking_admission_class }}</td>
        <td>{{ $info->fathername_in_english }}</td>
        <td>{{ $info->phoneNumber_father }}</td>
        <td>{{ $info->current_address }}</td>

        <!-- Details Button -->
        <td>
            <a href="{{url('/admin/online_applications')}}/{{$info->id}}">
                <button type="button" class="btn btn-primary">Details</button>
            </a>

            @if($info->status==1)

        
            <a href="{{url('/admin/online_applications_approve')}}/{{$info->id}}">
                <button type="button" class="btn btn-success">Approved</button>
            </a>
        

        @elseif($info->status==0)

        
            <a href="{{url('/admin/online_applications_approve')}}/{{$info->id}}">
                <button type="button" class="btn btn-danger">Unapproved</button>
            </a>
       

        @endif


        </td>

    

        
       
    </tr>
@endforeach

</tbody>

<tfoot>
<tr>
      <th>Id</th>
      <th>Student Name</th>
      <th>Want to Admitted in</th>
      <th>Father Name</th>
      <th>Father Phone</th>
      <th>Current Address</th>
      <th >Action</th>
    </tr>
</tfoot>
</table>


</div>

</body>

<script src="{{ asset('adminFrontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<!--=====popper js=====-->
<script src="{{ asset('adminFrontend/assets/js/popper.min.js')}}"></script>
<!--=====bootstrap=====-->
<script src="{{ asset('adminFrontend/assets/js/bootstrap.min.js')}}"></script>

<!--=====header script=====-->
<script src="{{ asset('adminFrontend/assets/js/script.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('adminFrontend/assets/js/main.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/Javascript">

    $(document).ready(function () {
        
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
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
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
   
</script>

@endsection