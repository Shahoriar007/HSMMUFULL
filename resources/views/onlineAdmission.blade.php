@extends('master')
@section('onlineAdmission')    
    

  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(assets/img/shape/6.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Online Admission</h1>
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
                    <form method="POST" action="{{ route('online_admission_form') }}" enctype="multipart/form-data">
                        @csrf
                        <!---student info-->
                        <div class="admission-form-part">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 form-group"> <!---------Required-->
                                            <label for="">শিক্ষার্থীর নাম (বাংলায়)</label>
                                            <input type="text" id="studentname_in_bangla" name="studentname_in_bangla" class="form-control form-light" placeholder="বাংলায়">

                                            @error('studentname_in_bangla')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">Student's Name (in English)</label>
                                            <input type="text" id="studentname_in_english" name="studentname_in_english" class="form-control form-light" placeholder="in English">

                                            @error('studentname_in_english')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">জন্ম তারিখ (ইংরেজিতে)</label>
                                            <input type="text" id="birthDate" name="birthDate" class="form-control form-light"
                                                placeholder="dd/mm/yyyy (in English)">

                                            @error('birthDate')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">বয়স (01, 01, <span>2022</span>)তারিখে</label>
                                            <div class="d-flex justify-content-around">
                                                <input type="text" id="ageYears" name="ageYears" class="form-control form-light mr-1"
                                                    placeholder="in English">

                                                    

                                                <div class="mr-4" style="line-height: 50px;">বছর</div>
                                                <input type="text" id="ageMonths" name="ageMonths" class="form-control form-light"
                                                    placeholder="in English">

                                                    
                                                <div class="ml-1" style="line-height: 50px;">মাস</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">জন্মনিবন্ধন নাম্বার</label>
                                            <input type="text" id="birthReg" name="birthReg" class="form-control form-light" placeholder="in English">

                                            @error('birthReg')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">জাতীয়তা</label>
                                            <input type="text" id="nationality" name="nationality" class="form-control form-light" placeholder="in English">

                                            @error('nationality')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">রক্তের গ্রুপ</label>

                                            @error('bloodGroup')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            
                                            <select class="theme-combo home-charity" id="bloodGroup" name="bloodGroup"
                                                style="height: 400px">
                                                <option readonly>বাছাই করুন</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="0+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="Ab+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>

                                           
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">যে শ্রেণিতে পড়া সমাপ্ত করেছে</label>
                                            <input type="text" id="completed_class" name="completed_class" class="form-control form-light" placeholder="in English">

                                            @error('completed_class')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-8 form-group"><!---------Required-->
                                            <label for="">পূর্ব প্রতিষ্ঠানের নাম</label>
                                            <input type="text" id="pre_institution" name="pre_institution" class="form-control form-light" placeholder="in English">

                                            @error('pre_institution')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">ভর্তি হতে ইচ্ছুক ( শ্রেণি )</label>
                                            <input type="text" id="seeking_admission_class" name="seeking_admission_class" class="form-control form-light"
                                                placeholder="in English ( Ex: Class 6 )">

                                            @error('seeking_admission_class')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------admin dashboard theke puron korbe-->
                                            <label for="">ভর্তি নেয়া হলো ( শ্রেণি )</label>
                                            <input type="text" id="admitted_class" name="admitted_class" class="form-control form-light" placeholder="in English"
                                                readonly>
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------admin dashboard theke puron korbe-->
                                            <label for="">শাখা</label>
                                            <input type="text" id="admitted_section" name="admitted_section" class="form-control form-light" placeholder="in English"
                                                readonly>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-lg-10 form-light"><!---------Required-->
                                            <div><label for="admission_type" class="mr-2"><strong>ভর্তির ধরন ( টিক দিন
                                                        )</strong></label>
                                            @error('admission_type')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="admission_type" name="admission_type" value="hka"
                                                    class="">
                                                <label class="radio-padding" for="">হিফয কাম
                                                    একাডেমিক</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="admission_type" name="admission_type" value="ac"
                                                    class="">
                                                <label class="radio-padding" for="">একাডেমিক</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="admission_type" name="admission_type" value="a"
                                                    class="">
                                                <label class="radio-padding" for="">আবাসিক</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="admission_type" name="admission_type" value="dc"
                                                    class="">
                                                <label class="radio-padding" for="">ডে-কেয়ার</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="admission_type" name="admission_type" value="oa"
                                                    class="">
                                                <label class="radio-padding" for="">অনাবাসিক</label>
                                            </div>
                                            
                                        </div>

                                       

                                        <div class="col-lg-2 form-group"><!---------admin dashboard theke puron korbe-->
                                            <label for="">রোল</label>
                                            <input type="text" id="roll" name="roll"class="form-control form-light" placeholder="in English"
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <label for="">ভাই-বোনের নাম ( একের অধিক হলে কমা দিয়ে লিখুন )</label>
                                            <input type="text" id="siblingsName" name="siblingsName" class="form-control form-light" placeholder="in English">
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <label for="">পিতার নাম (বাংলায়)</label><!---------Required-->
                                            <input type="text" id="fathername_in_bangla" name="fathername_in_bangla" class="form-control form-light" placeholder="বাংলায়">

                                            @error('fathername_in_bangla')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">Fathers's Name (in English)</label>
                                            <input type="text" id="fathername_in_english" name="fathername_in_english" class="form-control form-light" placeholder="in English">

                                            @error('fathername_in_english')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">পেশা</label>
                                            <input type="text" id="fatherOccupation" name="fatherOccupation" class="form-control form-light" placeholder="in English">

                                            @error('fatherOccupation')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">শিক্ষাগত যোগ্যতা</label>
                                            <input type="text" id="father_edu_qua" name="father_edu_qua" class="form-control form-light" placeholder="in English">

                                            @error('father_edu_qua')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">এন আই ডি নাম্বার</label>
                                            <input type="text" id="fatherNid" name="fatherNid" class="form-control form-light" placeholder="in English">

                                            @error('fatherNid')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">মাতার নাম (বাংলায়)</label>
                                            <input type="text" id="mothername_in_bangla" name="mothername_in_bangla" class="form-control form-light" placeholder="বাংলায়">

                                            @error('mothername_in_bangla')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">Mothers's Name (in English)</label>
                                            <input type="text" id="mothername_in_english" name="mothername_in_english" class="form-control form-light" placeholder="in English">

                                            @error('mothername_in_english')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">পেশা</label>
                                            <input type="text" id="motherOccupation" name="motherOccupation" class="form-control form-light" placeholder="in English">

                                            @error('motherOccupation')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">শিক্ষাগত যোগ্যতা</label>
                                            <input type="text" id="mother_edu_qua" name="mother_edu_qua" class="form-control form-light" placeholder="in English">

                                            @error('mother_edu_qua')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 form-group"><!---------Required-->
                                            <label for="">এন আই ডি নাম্বার</label>
                                            <input type="text" id="motherNid" name="motherNid" class="form-control form-light" placeholder="in English">

                                            @error('motherNid')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">অভিভাবকের মাসিক আয় ( টাকায় )</label>
                                            <input type="text" id="monthlyIncome_parents_in_number" name="monthlyIncome_parents_in_number" class="form-control form-light" placeholder="in English">

                                            @error('monthlyIncome_parents_in_number')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">অভিভাবকের মাসিক আয় ( কথায় )</label>
                                            <input type="text" id="monthlyIncome_parents_in_words" name="monthlyIncome_parents_in_words" class="form-control form-light" placeholder="in English">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-3 form-group"><!---------Required-->
                                            <label for="">ফোন নাম্বার ( পিতা )</label>
                                            <input type="text" id="phoneNumber_father" name="phoneNumber_father" class="form-control form-light" placeholder="in English">

                                            @error('phoneNumber_father')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3 form-group"><!---------Required-->
                                            <label for="">ফোন নাম্বার ( মাতা )</label>
                                            <input type="text" id="phoneNumber_mother" name="phoneNumber_mother" class="form-control form-light" placeholder="in English">

                                            @error('phoneNumber_mother')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3 form-group"><!---------optional-->
                                            <label for="">ইমেইল আইডি, ( পিতা )</label>
                                            <input type="email" id="emailID_father" name="emailID_father" class="form-control form-light" placeholder="in English">
                                        </div>
                                        <div class="col-lg-3 form-group"><!---------optional-->
                                            <label for="">ইমেইল আইডি, ( মাতা )</label>
                                            <input type="email" id="emailID_mother" name="emailID_mother" class="form-control form-light" placeholder="in English">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">হোয়াটসঅ্যাপ/এস এম এস সার্ভিস নাম্বার</label>
                                            <input type="text" id="whatsappNumb" name="whatsappNumb" class="form-control form-light" placeholder="in English">
                                        </div>
                                        <div class="col-lg-6 form-group"><!---------Required-->
                                            <label for="">ইমারজেন্সি নাম্বার ( বিকল্প )</label>
                                            <input type="text" id="emergencyNumb" name="emergencyNumb" class="form-control form-light" placeholder="in English">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 form-group"><!---------Required-->
                                            <label for="">বর্তমান ঠিকানা</label>
                                            <input type="text" id="current_address" name="current_address" class="form-control form-light" placeholder="in English">

                                            @error('current_address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 form-group"><!---------Required-->
                                            <label for="">স্থায়ী ঠিকানা</label>
                                            <input type="text" id="permanent_address" name="permanent_address" class="form-control form-light" placeholder="in English">

                                            @error('permanent_address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 form-light"><!---------Required-->
                                            <div><label for="transport" class="mr-2"><strong>প্রতিষ্ঠানের পরিবহণ ব্যবস্থা ( টিক দিন )</strong></label>
                                            </div>

                                            @error('transport')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="transport" name="transport" value="y"
                                                    class="">
                                                <label class="radio-padding" for="transport1">প্রয়োজন আছে</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="transport" name="transport" value="n"
                                                    class="">
                                                <label class="radio-padding" for="transport2">প্রয়োজন নেই</label>
                                            </div>

                                            
                                        </div>

                                        <div class="form-group col-lg-6"><!---------Required-->
                        

                                            <label for="" style="color:#000; font-weight:600">পাসপোর্ট সাইজ ছবি সংযুক্ত করুন </label>

                                            @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <input type="file" id="photo" name="photo" class="form-light">
                                        </div>

                                        @php 
                                            $value = \App\Models\formlabel::all();
                                        @endphp

                                        @foreach($value as $fields)

                                        @if($fields->labelName != null)
                                        <div class="col-lg-12 form-group"><!---------Required-->
                                            <label for="">{{ $fields->labelName }}</label>
                                            <input type="text" id="{{ $fields->relatedField }}" name="{{ $fields->relatedField }}" class="form-control form-light" placeholder="in English">
                                        </div>
                                        @endif

                                        @endforeach

                                            
                                    </div>
                                </div>
                            </div>
                            <!--student info-->
                        </div>
                        <!---verification info-->
                        <div class="admission-form-part mt-3" style="background-color: #009640;">
                            <div class="row">
                                <div class="col-md-12 form-group"><!---------Required-->
                                    <input type="checkbox" class="form-control mb-3" name="submit-check" id="submit-check" style="width: 30px;" required>
                                    <label class="text-white" for="submit-check">আমি অত্র প্রতিষ্ঠানের সকল নিয়ম-কানুন ও আচরণবিধি সম্পর্কে অবগত হয়ে আমার সন্তনকে ভর্তি করানোর জন্য আবেদন করহি। তাঁকে কাঙ্ক্ষিত শ্রেণিতে ভর্তির সুযোগ দিলে কৃতজ্ঞ থাকব এবং প্রতিষ্ঠানের যাবতীয় বিধান মেনে চলব। মহান আল্লাহ আমাদের সকলকে দুনিয়া ও আখিরাতে সফলতা ও কল্যাণ দান  করুক! আমীন!!</label>
                                </div>
                                <div class="col-lg-12 text-center add-button">
                                    <input type="submit" class="bg-danger" value="Apply Now">
                                </div>
                            </div>
                            <!--verification info end-->
                        </div>
                    </form>
                </div>
                <!--form part end-->
            </div>
        </div>
    </div>
    <!-------Online Admission end-->

@endsection