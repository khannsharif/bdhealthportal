<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\NoticedboardController;
use App\Http\Controllers\BloodCommunityController;
use App\Http\Controllers\PatientRegistrationController;
use App\Http\Controllers\PatientCommunityBlogController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\ProfileController;


/*Route::get('/', function () {
    return view('frontend.doctors');
});*/

Route::resource('/', \App\Http\Controllers\Frontend\HomeController::class);


//Route::view('/appointment', 'PatientView/appointment')->name('appointment');
Route::view('/my_appointment', 'PatientView/my_appointment')->name('my_appointment');
Route::view('/blood_community', 'PatientView/blood_community')->name('blood_community');
Route::view('/blood_community_post', 'PatientView/blood_community_post')->name('blood_community_post');


Route::get('/search_doctor', [\App\Http\Controllers\Frontent\DoctorController::class, 'index'])->name('search_doctor');
Route::get('/search-doctors', [\App\Http\Controllers\Frontent\DoctorController::class, 'search_doctors']);

Route::get('/blog', [PatientCommunityBlogController::class, 'showAllBlog'])->name('patientblog.viewallBlogs');
Route::get('/blog/{id}', [PatientCommunityBlogController::class, 'read'])->name('patientblog.readmore');


Auth::routes();

Route::group(['middleware' => ['auth', 'role:patient']], function () {
    Route::resource('/patient_profile', PatientController::class);
});

Route::group(['middleware' => 'auth',], function () {

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin_dashboard', [\App\Http\Controllers\HomeController::class, 'adm'])->name('admin_dashboard');
    });


    Route::get('/change-password', [\App\Http\Controllers\Frontend\HomeController::class, 'passwordChange'])->name('change_password');
    Route::post('/change-password', [\App\Http\Controllers\Frontend\HomeController::class, 'passwordUpdate'])->name('update_password');

    Route::resource('/profile', ProfileController::class);

    // Start Department Routes
    Route::group(['prefix' => 'department',], function () {
        Route::view('/department_add', 'department_add')->name('department.add');
        Route::post('/create-department', [DepartmentController::class, 'store'])->name('department.create');
        Route::get('/edit-department/{id}', [DepartmentController::class, 'editDepartmentWithId'])->name('department.singleDepEdit');
        Route::post('/edit-department', [DepartmentController::class, 'edit'])->name('department.edit');
        Route::get('/department_list', [DepartmentController::class, 'showAllDepartment'])->name('department.list');
        Route::get('/view-department/{id}', [DepartmentController::class, 'viewSingleDepartmentWithId'])->name('department.singleDep');
        Route::delete('/delete-department/{id}', [DepartmentController::class, 'delete'])->name('department.delete');
    });
    /* Hospital Routes*/
    Route::group(['prefix' => 'hospital',], function () {
        Route::get('/hospital_add', [HospitalController::class, 'index']);
        Route::post('/hospital_add', [HospitalController::class, 'store'])->name('hospital.add');
        Route::post('/create-hospital', [HospitalController::class, 'store'])->name('hospital.create');
        Route::get('/edit-hospital/{id}', [HospitalController::class, 'editSingleHospitalWithId'])->name('hospital.singleHosEdit');
        Route::post('/edit-hospital/{id}', [HospitalController::class, 'edit'])->name('hospital.edit');
        Route::get('/hospital_list', [HospitalController::class, 'showAllHospital'])->name('hospital.list');
        Route::get('/view-hospital/{id}', [HospitalController::class, 'viewSingleHospitalWithId'])->name('hospital.singleHos');
        // Route::delete('/delete-department/{id}',[DepartmentController::class,'delete'])->name('department.delete');
    });

    /* Doctor Routes*/
    Route::group(['prefix' => 'doctor',], function () {
        Route::get('/doctor_add', [DoctorController::class, 'index'])->name('doctor.add');
        Route::post('/doctor_add', [DoctorController::class, 'store'])->name('doctor.add');
        Route::post('/create-doctor', [DoctorController::class, 'store'])->name('doctor.create');
        Route::get('/edit-doctor/{id}', [DoctorController::class, 'editSingleDoctorWithId'])->name('doctor.singleDoctorEdit');
        Route::post('/edit-doctor/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
        Route::get('/doctor_list', [DoctorController::class, 'showAllDoctor'])->name('doctor.list');
        //     Route::get('/view-hospital/{id}',[HospitalController::class,'viewSingleHospitalWithId'])->name('hospital.singleHos');
        Route::delete('/delete-doctor/{id}', [DoctorController::class, 'delete'])->name('doctor.delete');
    });

    /* Noticedboard Routes*/
    Route::group(['prefix' => 'noticeboard',], function () {
        Route::view('/noticeboard_add', 'noticeboard_add')->name('noticeboard.add');
        Route::post('/create-noticeboard', [NoticedboardController::class, 'store'])->name('noticeboard.create');
        Route::get('/edit-noticeboard/{id}', [NoticedboardController::class, 'editNoticeWithId'])->name('noticeboard.singleNoticeEdit');
        Route::post('/edit-noticeboard', [NoticedboardController::class, 'edit'])->name('noticeboard.edit');
        Route::get('/noticeboard_list', [NoticedboardController::class, 'showAllNotices'])->name('noticeboard.list');
        Route::get('/view-noticeboard/{id}', [NoticedboardController::class, 'viewSingleNoticeWithId'])->name('noticedboard.singleNotice');
        Route::delete('/delete-noticeboard/{id}', [NoticedboardController::class, 'delete'])->name('notice.delete');
    });

    /* Patient community blog Routes*/
    Route::group(['prefix' => 'patientblog',], function () {
        Route::view('/patient_community_blog_add', 'patient_community_blog_add')->name('patientblog.add');
        Route::post('/create-patientblog', [PatientCommunityBlogController::class, 'store'])->name('patientblog.create');
        Route::get('/edit-patientblog/{id}', [PatientCommunityBlogController::class, 'editBlogWithId'])->name('patientblog.singleBlogEdit');
        Route::post('/edit-patientblog', [PatientCommunityBlogController::class, 'edit'])->name('patientblog.edit');
        Route::get('/patient_community_blog_list', [PatientCommunityBlogController::class, 'showAllBlogList'])->name('patientblog.list');
        Route::get('/view-patientblog/{id}', [PatientCommunityBlogController::class, 'viewSingleBlogWithId'])->name('patientblog.singleBlog');
        Route::delete('/delete-patientblog/{id}', [PatientCommunityBlogController::class, 'delete'])->name('blog.delete');

        Route::get('/patient_community_Single_blog_Readmore/{id}', [PatientCommunityBlogController::class, 'readMore'])->name('patientblog.singleBlogReadmore');
    });

    /* Blood community blog Routes*/
    Route::group(['prefix' => 'bloodcommunity',], function () {
        Route::view('/blood_community_join', 'blood_community_join')->name('bloodcommunity.add');
        Route::post('/create-bloodcommunity', [BloodCommunityController::class, 'store'])->name('bloodcommunity.create');
        Route::get('/edit-noticeboard/{id}', [BloodCommunityController::class, 'editBloodInfoWithId'])->name('bloodcommunity.singleBloodInfoEdit');
        Route::post('/edit-bloodcommunity', [BloodCommunityController::class, 'edit'])->name('bloodcommunity.edit');
        Route::get('/blood_community_list', [BloodCommunityController::class, 'showAllBloodDonarList'])->name('bloodcommunity.list');
        Route::get('/view-bloodcommunity/{id}', [BloodCommunityController::class, 'viewSingleBloodDonarWithId'])->name('bloodcommunity.singleBloddDonar');
        Route::delete('/delete-bloodcommunity/{id}', [BloodCommunityController::class, 'delete'])->name('blood.delete');
        Route::view('/blood_community_allPost', 'blood_community_allPost')->name('bloodcommunity.allPost');

    });

    // Route::get('blood_community_join', function () {
    //     return view('blood_community_join');
    // });
    // Route::get('blood_community_list', function () {
    //     return view('blood_community_list');
    // });

});


/* Start Patient Routes*/
Route::get('/patient_registration', function () {
    return view('patient_registration');
});
Route::post('/create-patient', [PatientRegistrationController::class, 'store'])->name('patient.create');
Route::get('/patient_list', [PatientRegistrationController::class, 'showAllPatient']);
Route::get('/view-patient/{id}', [PatientRegistrationController::class, 'viewSinglePatientWithId']);
Route::get('/edit-patient/{id}', [PatientRegistrationController::class, 'editPatientWithId']);
Route::post('/edit-patient/{id}', [PatientRegistrationController::class, 'edit'])->name('patient.edit');


/* Appointment Routes*/
Route::group(['prefix' => 'appointment',], function () {
    Route::get('add', [AppointmentController::class, 'create'])->name('create_appointment');
    Route::post('add', [AppointmentController::class, 'store'])->name('store_appointment');
    Route::get('list', [AppointmentController::class, 'index']);
    Route::get('view', [AppointmentController::class, 'showAll'])->name('appointment_list');
    Route::get('update/status/{id}', [AppointmentController::class, 'updateStatus'])->name('update_appointment_status');
    Route::get('edit/{id}', [AppointmentController::class, 'edit'])->name('edit_appointment');
    Route::post('edit/{id}', [AppointmentController::class, 'update'])->name('update_appointment');
    Route::get('delete/{id}', [AppointmentController::class, 'destroy'])->name('delete_appointment');
});

/* Prescription Routes*/
Route::get('prescription_add/{id}/{serial_no}', [PrescriptionController::class, 'create'])->name('add_prescription');
Route::post('prescription/add/{id}/{serial_no}', [PrescriptionController::class, 'store'])->name('store_prescription');
Route::get('prescription_list', [PrescriptionController::class, 'index'])->name('prescription_list');
Route::get('prescription/edit/{prescription_id}', [PrescriptionController::class, 'edit'])->name('prescription_edit');
Route::post('prescription/update/{prescription_id}', [PrescriptionController::class, 'update'])->name('prescription_update');
Route::get('prescription/{prescription_id}', [PrescriptionController::class, 'show'])->name('prescription_show');
//Route::view('/prescription_single_view', 'prescription_single_view')->name('prescription.singlePrescription');
// Route::view('/prescription_single_view_download','prescription_single_view_download')->name('prescription.singlePrescriptionDownload');


// Route::get('/view-prescription/{id}',[PrescriptionController::class,'viewSinglePrescriptionWithId'])->name('prescription.singlePrescription');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

