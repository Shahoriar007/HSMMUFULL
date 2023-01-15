@extends('master')
@section('teacherApplicationForm')


<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Teacher Application</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Online Admission</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-------Online Admission start-->
<div class="online-admission default-padding">
    <div class="container">
        <div class="row">
            <!--form part-->
            <div class="col-lg-9 mx-auto">
                <form method="POST" action="{{ route('teacher_application_form') }}" enctype="multipart/form-data">
                    @csrf
                    <!---student info-->
                    <div class="admission-form-part">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">Name</label>
                                        <input type="text" id="name" name="name" class="form-control form-light" placeholder="in English">

                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">Email</label>
                                        <input type="text" id="email" name="email" class="form-control form-light" placeholder="in English">

                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control form-light" placeholder="in English">

                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">Address</label>
                                        <input type="text" id="address" name="address" class="form-control form-light" placeholder="in English">

                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">Gender</label>
                                        <input type="text" id="gender" name="gender" class="form-control form-light" placeholder="in English">

                                        @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-lg-6 form-group">
                                        <label for="">Photo</label>
                                        <input type="file" id="photo" name="photo"  >

                                        @error('photo')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">SSC Passing year</label>
                                        <input type="text" id="ssc_year" name="ssc_year" class="form-control form-light" placeholder="in English">

                                        @error('ssc_year')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">Group</label>
                                        <input type="text" id="ssc_group" name="ssc_group" class="form-control form-light" placeholder="in English">

                                        @error('ssc_group')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">GPA</label>
                                        <input type="text" id="ssc_gpa" name="ssc_gpa" class="form-control form-light" placeholder="in English">

                                        @error('ssc_gpa')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">HSC passing year</label>
                                        <input type="text" id="hsc_year" name="hsc_year" class="form-control form-light" placeholder="in English">

                                        @error('hsc_year')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">Group</label>
                                        <input type="text" id="hsc_group" name="hsc_group" class="form-control form-light" placeholder="in English">

                                        @error('hsc_group')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 form-group"><!---------Required-->
                                        <label for="">GPA</label>
                                        <input type="text" id="hsc_gpa" name="hsc_gpa" class="form-control form-light" placeholder="in English">

                                        @error('hsc_gpa')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 form-group"><!---------Required-->
                                        <label for="">Graduation year</label>
                                        <input type="text" id="grad_year" name="grad_year" class="form-control form-light" placeholder="in English">

                                        @error('grad_year')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-3 form-group"><!---------Required-->
                                        <label for="">Department</label>
                                        <input type="text" id="grad_dept" name="grad_dept" class="form-control form-light" placeholder="in English">

                                        @error('grad_dept')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <div class="col-lg-3 form-group"><!---------Required-->
                                        <label for="">Major</label>
                                        <input type="text" id="major" name="major" class="form-control form-light" placeholder="in English">

                                        @error('major')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-lg-3 form-group"><!---------Required-->
                                        <label for="">CGPA</label>
                                        <input type="text" id="cgpa" name="cgpa" class="form-control form-light" placeholder="in English">

                                        @error('cgpa')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="">Position</label>
                                        <input type="text" id="position" name="position" class="form-control form-light" placeholder="in English">

                                        @error('position')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 form-group"><!---------Required-->
                                        <label for="cv">CV</label>
                                        <input type="file" id="cv" name="cv">
                                        @error('cv')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                               

                                <div class="row">
                                    <div class="col-lg-12 form-group"><!---------Required-->
                                        <label for="">Cover Letter</label>
                                        <textarea type="text" cols="20" rows="10" id="cover_Let" name="cover_Let" class="form-control form-light" placeholder="in English"></textarea>

                                        @error('cover_Let')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="submit" value="submit" class="btn btn-success">
                                </div>

                            </div>
                        </div>
                        <!--student info-->
                    </div>
                </form>
            </div>
            <!--form part end-->
        </div>
    </div>
</div>
<!-------Online Admission end-->

@endsection