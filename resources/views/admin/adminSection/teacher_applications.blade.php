@extends('masterAdmin')
@section('teacherApplications')




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

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>


</head>

<body>

    <div>
        <a href=""> Dashboard</a>
    </div>
    <br><br>

    <h2 class="text-center">Teacher Application Table</h2>



    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Id</th>
                <th>Applicant Name</th>
                <th>Photo</th>
                <th>Position</th>
                <th>CV</th>
               

                <th colspan="2" class="text-center">Action</th>
            </tr>

            @foreach($teacherApplications as $application)
            <tr>
                <td>{{$application->id}}</td>
                <td>{{$application->name}}</td>
                <td>
                    <img src="{{url('/upload/teacher_images/'. $application->photo)}}" alt="">
                </td>
                <td>{{$application->position}}</td>
                <td><a href="{{ url('cvs/' . $application->cv) }}">Download</a></td>
              
                <!-- Details Button -->
                <td>
                    <a href="{{url('/admin/teacher/application/details')}}/{{$application->id}}">
                        <button type="button" class="btn btn-primary">Details</button>
                    </a>
                </td>

                <!-- Approve Button -->

                @if($application->status==1)

                <td>
                    <a href="{{url('/admin/teacher/application/approve')}}/{{$application->id}}">
                        <button type="button" class="btn btn-success">Approved</button>
                    </a>
                </td>

                @elseif($application->status==0)

                <td>
                    <a href="{{url('/admin/teacher/application/approve')}}/{{$application->id}}">
                        <button type="button" class="btn btn-danger">Unapproved</button>
                    </a>
                </td>

                @endif

               

            </tr>
            @endforeach

        </table>

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<div >
{{ $teacherApplications->links() }}
</div>

       

    </div>

</body>


@endsection