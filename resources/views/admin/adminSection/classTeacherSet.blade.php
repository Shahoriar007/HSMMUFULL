@extends('masterAdmin')
@section('class')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">


                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">

                        </div>

                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Add Class Teacher</h5>
                                </div>

                                <form class="gy-3" method="POST" action="{{ route('classTeacherSetSubmit') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row g-3 align-center">

                                        @php

                                        $classSection = \App\Models\Classinfo::all();

                                        @endphp



                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">

                                                    <label for="class">Choose Class:</label>
                                                    <select class="form-control" name="classTeacherClass"
                                                        id="classTeacherClass">

                                                        @foreach($classSection as $classInfo)
                                                        <option value="{{$classInfo->class}}">{{ $classInfo->class }}
                                                        </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">

                                                    <label for="class">Choose Section:</label>
                                                    <select class="form-control" name="classTeacherSection"
                                                        id="classTeacherSection">

                                                        @foreach($classSection as $sectionInfo)
                                                        <option value="{{$sectionInfo->section}}">
                                                            {{ $sectionInfo->section }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">

                                                    <label for="class">Teacher Id</label>
                                                    <input class="form-control" id="teacherId" type="text"
                                                        name="teacherId" placeholder="Teacher id">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">All Classes and Sections</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="pro-id">Class</th>
                                                <th class="pro-title">Section</th>
                                                <th class="pro-status">Teacher ID</th>
                                                <th class="pro-status">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($classTeacher as $classTeacherInfo)
                                            <tr>

                                                <td>{{ $classTeacherInfo->classTeacherClass }}</td>
                                                <td>{{ $classTeacherInfo->classTeacherSection }}</td>
                                                <td>{{ $classTeacherInfo->teacherId }}</td>
                                                <td>

                                                    <a href="{{ url('/admin/classTeacherSet/delete') }}/{{$classTeacherInfo->teacherId}}"
                                                        class="btn btn-danger">Delete</a>

                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>

                    </div><!-- .nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->



@endsection