<?php
use Illuminate\Support\Facades\Route;
/*Web Routes*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('alljob', [App\Http\Controllers\JobController::class, 'all_jobs'])->name('list');
Route::get('details/{id}', [App\Http\Controllers\JobseekerController::class, 'details'])->name('details');
Route::get('jobseeker-info/{q?}', [App\Http\Controllers\HomeController::class, 'jobseeker_info'])->name("jobseekers");
Route::get('company-info', [App\Http\Controllers\HomeController::class, 'company_info'])->name("company");
// Route::get('employer-info', [App\Http\Controllers\HomeController::class, 'employer_info']);
// Route::get('undp', [App\Http\Controllers\jobseekerController::class, 'undp']);
// For create jobseeker
Route::resource('jobseeker', App\Http\Controllers\JobseekerController::class);
// Get department from Faculty
Route::get('myform/ajax/{id}', [App\Http\Controllers\JobseekerController::class, 'getDepartment'])
    ->name('myform.ajax');
Route::get('mastersmyform/ajax/{id}', [App\Http\Controllers\JobseekerController::class, 'getMastersDepartment'])
    ->name('mastersmyform.ajax');
// Job
Route::resource('jobs', App\Http\Controllers\JobController::class);
Route::get('jobs/{id}/applied', [App\Http\Controllers\JobController::class, 'applied'])->name('applied');
Route::get('jobs/{id}/jobwise-applide', [App\Http\Controllers\JobController::class, 'jobwise_applide'])->name('jobwise-applide');
Route::get('jobs/status/{id}/change',[App\Http\Controllers\JobController::class, 'change'])->name('change');
Route::get('approve/{id}',[App\Http\Controllers\JobseekerController::class, 'approve'])->name('approve');
Route::post('approve',[App\Http\Controllers\JobseekerController::class, 'approvepayment'])->name('approvepayment');
Route::post('jobs/status/change',[App\Http\Controllers\JobController::class, 'changestatus'])->name('chamgestatus');
Route::resource('employer', App\Http\Controllers\EmployerController::class);
// Jobseekers Status
Route::get('jobs/status/{id}/jobseeker-status',[App\Http\Controllers\JobController::class, 'jobseeker_status'])->name('jobseeker-status');
Route::post('jobs/status/update-jobseeker-status',[App\Http\Controllers\JobController::class, 'update_jobseeker_status'])->name('update-jobseeker-status');
Route::get('home',[App\Http\Controllers\JobController::class, 'alljobs'])->name('alljobs');
Route::get('alljobs',[App\Http\Controllers\JobController::class, 'alljobs'])->name('alljobs');
Route::get('services',[App\Http\Controllers\JobController::class, 'services'])->name('services');
Route::get('profile',[App\Http\Controllers\JobseekerController::class, 'profile'])->name('profile');
Route::post('profile/update',[App\Http\Controllers\JobseekerController::class, 'update'])->name('jobseeker.update');
// Payment getway
Route::post('servicepay',[App\Http\Controllers\JobController::class, 'servicepay'])->name('servicepay');
Route::get('apply/{id}',[App\Http\Controllers\JobController::class, 'applynow'])->name('applynow');
// company
Route::get('create/company',[App\Http\Controllers\JobController::class, 'create_company'])->name('create_company');
Route::post('create/company',[App\Http\Controllers\JobController::class, 'create_company_post'])->name('create_company_post');
Route::get('company/{name}',[App\Http\Controllers\JobController::class, 'company_jobs'])->name('company_jobs');
Route::get('companywise-jobs',[App\Http\Controllers\JobController::class, 'companywise_jobs'])->name('companywise_jobs');
Route::get('view-jobseeker-status',[App\Http\Controllers\JobController::class, 'view_jobseeker_status'])->name('view-jobseeker-status');
Route::get('job-search',[App\Http\Controllers\JobController::class, 'job_search'])->name('job.search');
Route::get('job_search',[App\Http\Controllers\JobController::class, 'search_job'])->name('job_search');
Route::get('jobseeker-search',[App\Http\Controllers\JobseekerController::class, 'jobseeker_search'])->name('jobseeker.search');
Route::get('my-jobs',[App\Http\Controllers\JobController::class, 'my_jobs'])->name('my-jobs');
Route::get('jobseeker-search-type',[App\Http\Controllers\JobseekerController::class, 'jobseeker_search_type'])->name('jobseeker.search.type');
//website
Route::get('contact',[App\Http\Controllers\FrontendController::class, 'contact_info'])->name('contact');
Route::get('schedule',[App\Http\Controllers\FrontendController::class, 'schedule_info'])->name('schedule');
Route::get('speakers',[App\Http\Controllers\FrontendController::class, 'speakers_info'])->name('speakers');
Route::get('participants',[App\Http\Controllers\FrontendController::class, 'participants_info'])->name('participants');
Route::get('about-event',[App\Http\Controllers\FrontendController::class, 'about_event'])->name('about-event');
Route::get('about-organizer',[App\Http\Controllers\FrontendController::class, 'about_organizer'])->name('about-organizer');
// Archive
Route::get('job-utsob-2022',[App\Http\Controllers\FrontendController::class, 'job_utsob_2022'])->name('job-utsob-2022');
// for multiple cv download
Route::get('/download-resumes', [App\Http\Controllers\JobseekerController::class, 'downloadResumes'])->name('download-resumes');
Route::get('/download-job-resumes/{job_id}', [App\Http\Controllers\JobseekerController::class, 'downloadJobResumes'])->name('download.job.resumes');
Route::get('/destroy_job/{id}', [App\Http\Controllers\JobController::class, 'destroy_job']);