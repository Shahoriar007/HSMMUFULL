@extends('master')
@section('notice')


<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Notices</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Notices</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<div class="notice-table default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 overflow-auto">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead style="background-color: #016938; color: #fff">
                        <tr>
                            <th style="width:34px;">SN</th>
                            <th style="width:645px;">Title</th>
                            <th style="width: 151px;">Published</th>
                            <th style="width: 50px">View</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($notices)
                        @foreach($notices as $key=>$notice)
                        <tr>

                            <td>{{$key+1}}</td>
                            <td>{{$notices[$key]->title}}</td>
                            <td>{{$notices[$key]->created_at->format('d M Y')}}</td>
                            <td><a href="{{'/notice/'.$notices[$key]->id.'/view'}}" target="_blank" rel="noopener noreferrer">View</a></td>


                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('adminFrontend/assets/js/ckeditor/ckeditor.js')}}"></script>

@endsection