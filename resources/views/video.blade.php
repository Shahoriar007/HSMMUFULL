@extends('master')
@section('onlineAdmission')    
      <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Video</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Video</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Gallery
    ============================================= -->
    <div class="video-part default-padding">
        <div class="container">
            <div class="row">
                <!--single item-->
                <div class="col-lg-4 col-md-6 single-item thumb mb-4">
                    <div class="thumb-box">
                        <img src="{{ asset('userFrontend/assets/img/800x600.png')}}" alt="Thumb">
                        <a href="#" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="video-title">
                        <h4>Debate Competition</h4>
                    </div>
                </div>
                <!--single item end-->
                <!--single item-->
                <div class="col-lg-4 col-md-6 single-item thumb mb-4">
                    <div class="thumb-box">
                        <img src="{{ asset('userFrontend/assets/img/800x600.png')}}" alt="Thumb">
                        <a href="#" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="video-title">
                        <h4>Debate Competition</h4>
                    </div>
                </div>
                <!--single item end-->
                <!--single item-->
                <div class="col-lg-4 col-md-6 single-item thumb mb-4">
                    <div class="thumb-box">
                        <img src="{{ asset('userFrontend/assets/img/800x600.png')}}" alt="Thumb">
                        <a href="#" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="video-title">
                        <h4>Debate Competition</h4>
                    </div>
                </div>
                <!--single item end-->
            </div>


            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
@endsection