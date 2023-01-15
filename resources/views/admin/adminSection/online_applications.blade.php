@extends('masterAdmin')
@section('onlineApplications')




<head>
<style>
/* table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
} */
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>


</head>
<body>

<div>
    <a href=""> Dashboard</a>
</div>
<br><br>

<h2 class="text-center">Online Applicatrion Table</h2>



<div style="overflow-x:auto;">
<table >
  <tr>
    <th>Id</th>
    <th>Student Name</th>
    <th>Want to Admitted in</th>
    <th>Father Name</th>
    <th>Father Phone</th>
    <th>Current Address</th>

    <th colspan="2" class="text-center">Action</th>
  </tr>

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
        </td>

        <!-- Approve Button -->

        @if($info->status==1)

        <td>
            <a href="{{url('/admin/online_applications_approve')}}/{{$info->id}}">
                <button type="button" class="btn btn-success">Approved</button>
            </a>
        </td>

        @elseif($info->status==0)

        <td>
            <a href="{{url('/admin/online_applications_approve')}}/{{$info->id}}">
                <button type="button" class="btn btn-danger">Unapproved</button>
            </a>
        </td>

        @endif
        
        <!-- <td>
            <select name="status" id="status" class="btn btn-success status">

                

                <option data-display="">
                  <a href="{{url('/admin/online_applications')}}/{{$info->id}}" >
                      <button type="button" class="btn btn-primary">Details</button>
                  </a>
                </option>

                <option data-display="">
                  <a href="" >
                    <button type="button" class="btn btn-primary">Approve</button>
                  </a>
                </option>
                
            </select>
        </td> -->

    </tr>
@endforeach

</table>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->



<!-- Pagination -->
<br>
<br>
<div class="row justify-content-md-center">
  <div class="col-md-auto">
  
  </div> 
</div>
<br>
<br>

</div>

</body>


@endsection