<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OnlineadmissionController;
use App\Http\Controllers\FormlabelController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\BlogcatagoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClassinfoController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SceduleController;
use App\Http\Controllers\TeacherApplicationController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TutionfeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TeacherAttendenceController;
use App\Http\Controllers\StudentAttendenceController;
use App\Http\Controllers\StudentTutionFees;

use App\Models\Teacherapplicationform;
use App\Models\TeacherApplications;
use App\Models\Tutionfee;
use App\Models\TeacherAttendence;

// General Pages
// home
Route::get('/',[HomeController::class,'index'])->name('home');

// honorable_teacher
Route::get('/honorable_teacher', function () {
    return view('honorable_teacher');
})->name('honorable_teacher');

// about
Route::get('/about', function () {
    return view('about');
})->name('about');

// aim
Route::get('/aim', function () {
    return view('aim');
})->name('aim');

// management_message
Route::get('/management_message', function () {
    return view('management_message');
})->name('management_message');

// info_for_parents
Route::get('/info_for_parents', function () {
    return view('info_for_parents');
})->name('info_for_parents');

// rules_and_regulation
Route::get('/rules_and_regulation', function () {
    return view('rules_and_regulation');
})->name('rules_and_regulation');

// extra_curricular_activities
Route::get('/extra_curricular_activities', function () {
    return view('extra_curricular_activities');
})->name('extra_curricular_activities');

// online_admission
Route::get('/online_admission', [OnlineadmissionController::class, 'index'])->name('online_admission');
Route::post('/online_admission', [OnlineadmissionController::class, 'create'])->name('online_admission_form');




// notices
Route::get('/notices',[NoticeController::class,'allNotice'])->name('allNotice');

Route::get('/notice/{id}/view',[NoticeController::class,'viewNotice'])->name('viewNotice');
// blogs
Route::get('academic/blog/{id}',[BlogController::class,'viewBlog'])->name('viewBlog');

//career
Route::get('/career',[TeacherApplicationController::class,'index'])->name('career');
Route::post('/career', [TeacherApplicationController::class, 'create'])->name('teacher_application_form');

//our team
Route::get('/our-team',[TeacherController::class,'index'])->name('ourTeam');






// news_events
Route::get('/news_events', function () {
    return view('news_events');
})->name('news_events');

// gallery
Route::get('/gallery', [GalleryController::class,'viewPhotos'])->name('gallery');

// video
Route::get('/video', function () {
    return view('video');
})->name('video');

// contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Student Dashboard
Route::get('/dashboard', [UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Student Tution Fees
Route::get('/tutionFees', [StudentTutionFees::class,'index'])->middleware(['auth', 'verified'])->name('studentTuitionFees');

// Student Change Password
Route::get('/studentPasswordUpdate', [UserController::class, 'changePasswordView'] )->middleware(['auth'])->name('changePasswordStudent');
Route::post('/studentPasswordUpdate', [UserController::class, 'changePasswordform'] )->middleware(['auth'])->name('changePasswordPost');

require __DIR__.'/auth.php';






Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// Admin view
Route::prefix('admin')->group(function(){

// Student Form Setup_View
Route::get('/student_applicationForm', [FormlabelController::class, 'show'])->middleware(['auth:admin', 'verified'])->name('studentFormsetupView');
// Student Form Setup Submit
Route::post('/student_applicationForm', [FormlabelController::class, 'create'])->middleware(['auth:admin', 'verified'])->name('studentFormsetupSubmit');

Route::post('/delete/student/form/field', [FormlabelController::class, 'destroyStudentFormField'])->middleware(['auth:admin', 'verified'])->name('deleteStudentFormField');
Route::post('/update/student/form/field', [FormlabelController::class, 'updateStudentFormField'])->middleware(['auth:admin', 'verified'])->name('updateStudentFormField');



// Teacher Form Setup_View
Route::get('/teacher_applicationForm', [FormlabelController::class, 'view'])->middleware(['auth:admin', 'verified'])->name('teacherFormsetupView');
// Student Form Setup Submit
Route::post('/teacher_applicationForm', [FormlabelController::class, 'make'])->middleware(['auth:admin', 'verified'])->name('teacherFormsetupSubmit');

Route::post('/delete/teacher/form/field', [FormlabelController::class, 'destroyTeacherFormField'])->middleware(['auth:admin', 'verified'])->name('deleteTeacherFormField');
Route::post('/update/teacher/form/field', [FormlabelController::class, 'updateTeacherFormField'])->middleware(['auth:admin', 'verified'])->name('updateTeacherFormField');


// Online Applications
Route::get('/online_applications', [OnlineadmissionController::class, 'show'])->middleware(['auth:admin', 'verified'])->name('allApplications');
Route::get('/update/student/info/{id}', [OnlineadmissionController::class, 'update'])->middleware(['auth:admin', 'verified'])->name('updateStudentInfo');
Route::post('/update/student/info', [OnlineadmissionController::class, 'updateInfo'])->middleware(['auth:admin', 'verified'])->name('updateInfo');

// Online Application details view
Route::get('/online_applications/{id}', [OnlineadmissionController::class, 'applicationDetails'])->middleware(['auth:admin', 'verified']);

// Online Application class, section, roll input page view
Route::get('/online_applications_approve/{id}', [OnlineadmissionController::class, 'applicationApproveView'])->middleware(['auth:admin', 'verified']);
// Online Application class, section, roll input page form
Route::post('/online_applications_approve/{id}', [OnlineadmissionController::class, 'applicationApproveInput'])->middleware(['auth:admin', 'verified'])->name('admission_form_approve');


//navbar, slider, logo, socila media, blog, notice, gallery, video CRUD

    Route::get('/nav', [NavbarController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('navbar');
    Route::post('/nav', [NavbarController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createNav');
    Route::get('/socialMedia', [SocialmediaController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('socialMedia');
    Route::post('/socialMedia', [SocialmediaController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createSocialMedia');
    Route::get('/catagory', [BlogcatagoryController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('catagory');
    Route::post('/catagory', [BlogcatagoryController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createCatagory');
    Route::get('/logo',[LogoController::class,'index'])->middleware(['auth:admin', 'verified'])->name('logo');
    Route::post('/logo',[LogoController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createLogo');
    Route::get('/slider',[SliderController::class,'index'])->middleware(['auth:admin', 'verified'])->name('slider');
    Route::post('/slider',[SliderController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createSlider');
    Route::post('/delete/catagory',[BlogcatagoryController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteCatagory');
    Route::post('/update/catagory/status',[BlogcatagoryController::class,'updateCatagoryStatus'])->middleware(['auth:admin', 'verified'])->name('updateCatagoryStatus');
    Route::post('/delete/logo',[LogoController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteLogo');
    Route::post('/update/logo/status',[LogoController::class,'updateLogoStatus'])->middleware(['auth:admin', 'verified'])->name('updateLogoStatus');
    Route::post('/delete/nav',[NavbarController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteNav');
    Route::post('/update/nav/status',[NavbarController::class,'updateNavStatus'])->middleware(['auth:admin', 'verified'])->name('updateNavStatus');
    Route::post('/delete/slider',[SliderController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteSlider');
    Route::post('/update/slider/status',[SliderController::class,'updateSliderStatus'])->middleware(['auth:admin', 'verified'])->name('updateSliderStatus');
    Route::get('/blog',[BlogController::class,'index'])->middleware(['auth:admin', 'verified'])->name('blog');
    Route::post('/blog',[BlogController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createBlog');
    Route::get('/photos',[GalleryController::class,'index_photos'])->middleware(['auth:admin', 'verified'])->name('photos');
    Route::get('/videos',[GalleryController::class,'index_videos'])->middleware(['auth:admin', 'verified'])->name('videos');
    Route::post('/photos',[GalleryController::class,'addPhotos'])->middleware(['auth:admin', 'verified'])->name('addPhotos');
    Route::post('/photo/delete',[GalleryController::class,'deletePhotos'])->middleware(['auth:admin', 'verified'])->name('deletePhoto');
    Route::get('/notice',[NoticeController::class,'index'])->middleware(['auth:admin', 'verified'])->name('notice');
    Route::post('/notice/create',[NoticeController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createNotice');
    Route::post('/notice/delete',[NoticeController::class,'deleteNotice'])->middleware(['auth:admin', 'verified'])->name('deleteNotice');
    Route::get('/class/info',[ClassinfoController::class,'index'])->middleware(['auth:admin', 'verified'])->name('classInfo');
    Route::post('/class/info',[ClassinfoController::class,'addClassinfo'])->middleware(['auth:admin', 'verified'])->name('addClassinfo');
    Route::get('/scedule',[SceduleController::class,'index'])->middleware(['auth:admin', 'verified'])->name('scedule');
    Route::post('/scedule',[SceduleController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createScedule');
    Route::post('/update/scedule',[SceduleController::class,'update'])->middleware(['auth:admin', 'verified'])->name('updateScedule');
    Route::post('/delete/blog',[BlogController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteBlog');
    Route::post('/blog/update',[BlogController::class,'updateBlog'])->middleware(['auth:admin', 'verified'])->name('updateBlog');
    Route::post('/notice/update',[NoticeController::class,'updateNotice'])->middleware(['auth:admin', 'verified'])->name('updateNotice');





    // Teacher applications
Route::get('/teacher/application/all', [TeacherApplicationController::class, 'show'])->middleware(['auth:admin', 'verified'])->name('teacherApplications');
Route::get('/teacher/application/details/{id}', [TeacherApplicationController::class, 'applicationDetail'])->middleware(['auth:admin', 'verified']);
Route::get('/teacher/application/approve/{id}', [TeacherApplicationController::class, 'approveView'])->middleware(['auth:admin', 'verified']);
Route::post('/teacher/application/approve/{id}', [TeacherApplicationController::class, 'approveInput'])->middleware(['auth:admin', 'verified'])->name('teacher_application_approve');


//Tution fee and salary

Route::get('/tution/fee', [TutionfeeController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('tutionFee');
Route::post('/tution/fee', [TutionfeeController::class, 'create'])->middleware(['auth:admin', 'verified'])->name('tutionFeeGenerate');
Route::get('/teacher/salary', [SalaryController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('teacherSalary');
Route::post('/teacher/salary', [SalaryController::class, 'create'])->middleware(['auth:admin', 'verified'])->name('teacherSalaryGenerate');
Route::post('/status/tution', [TutionfeeController::class, 'updateTutionStatus'])->middleware(['auth:admin', 'verified'])->name('updateTutionStatus');
Route::post('/salary/teacher', [SalaryController::class, 'updateSalaryStatus'])->middleware(['auth:admin', 'verified'])->name('updateSalaryStatus');
Route::get('/account/status',[AccountController::class, 'index'])->middleware(['auth:admin','verified'])->name('accountStatus');
Route::post('/account/status', [AccountController::class, 'show'])->middleware(['auth:admin', 'verified'])->name('accountStatusPost');

// Teaacher Attendence

Route::get('/teacher/attendence', [TeacherAttendenceController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('teacherAttendence');
Route::post('/teacher/attendence', [TeacherAttendenceController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('teacherAttendencePost');
Route::post('/teacher/attendence/update', [TeacherAttendenceController::class, 'update'])->middleware(['auth:admin', 'verified'])->name('teacherAttendenceUpdate');

// Class Teacher set
Route::get('/classTeacherSet', [TeacherController::class, 'viewClassTeacherSet'])->middleware(['auth:admin', 'verified'])->name('classTeacherSet');
Route::post('/classTeacherSet', [TeacherController::class, 'viewClassTeacherPost'])->middleware(['auth:admin', 'verified'])->name('classTeacherSetSubmit');
Route::get('/classTeacherSet/delete/{teacherId}', [TeacherController::class, 'classTeacherDelete'])->middleware(['auth:admin', 'verified']);

// Class Teacher Set
//Route::get('/teacher/attendence', [TeacherAttendenceController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('classTeacherSet');




    //Route::post('/class/info',[ClassinfoController::class,'addClassinfo'])->middleware(['auth:admin', 'verified'])->name('addClassinfo');


});

require __DIR__.'/adminauth.php';



Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->middleware(['auth:teacher', 'verified'])->name('teacher.dashboard');


// Teacher view
Route::prefix('teacher')->group(function(){
    Route::get('/viewScedule',[SceduleController::class,'show'])->middleware(['auth:teacher', 'verified'])->name('viewScedule');
    Route::post('/viewScedule',[SceduleController::class,'classRoutine'])->middleware(['auth:teacher', 'verified'])->name('classRoutine');
    Route::get('/view/salary',[SalaryController::class,'salary'])->middleware(['auth:teacher', 'verified'])->name('salary');
    Route::get('/password', [TeacherController::class, 'changePasswordView'] )->middleware(['auth:teacher', 'verified'])->name('changeTeacherPasswordView');
    Route::post('/password/change', [TeacherController::class, 'changePassword'] )->middleware(['auth:teacher', 'verified'])->name('changeTeacherPassword');

    // Teacher -> student attendence
    Route::get('/attendence/{class}/{section}', [StudentAttendenceController::class, 'index'] )->middleware(['auth:teacher', 'verified']);

    Route::post('/attendence', [StudentAttendenceController::class, 'store'] )->middleware(['auth:teacher', 'verified'])->name('studentAttendence');



});

 
require __DIR__.'/teacherauth.php';