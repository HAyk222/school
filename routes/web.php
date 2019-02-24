<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home','HomeController@show')->name('home');
Route::get('/schedule','ScheduleController@index')->name('schedule');
Route::get('/teacher','TeacherController@index')->name('teacher');
Route::get('/events','EventsController@index')->name('events');
Route::get('/contact','ContactController@show')->name('contact');
Route::get('/history','HistoryController@show')->name('history');
Route::get('/news','NewsController@index')->name('news');
Route::get('/documents','DocumentsController@show')->name('documents');
Route::get('/staff','StaffController@index')->name('staff');
Route::get('/administration','AdministrationController@index')->name('administration');
Route::get('/pedagogical','PedagogicalController@index')->name('pedagogical');
Route::get('/servicing','ServicingController@index')->name('servicing');
Route::get('/pupilary','PupilaryController@index')->name('pupilary');
Route::get('/parental','ParentalController@index')->name('parental');
Route::get('/management','ManagementController@index')->name('management');
Route::get('/monte','MonteController@index')->name('monte');
Route::get('/electroniclibrary','ElectronicLibraryController@show')->name('electroniclibrary');

//class1
Route::get('/classes.1-1','ClassesController@class1_1')->name('classes.1-1');
Route::get('/classes.1-2','ClassesController@class1_2')->name('classes.1-2');
Route::get('/classes.1-3','ClassesController@class1_3')->name('classes.1-3');
Route::get('/classes.1-4','ClassesController@class1_4')->name('classes.1-4');
Route::get('/classes.1-5','ClassesController@class1_5')->name('classes.1-5');
Route::get('/classes.1-6','ClassesController@class1_6')->name('classes.1-6');
Route::get('/classes.1-7','ClassesController@class1_7')->name('classes.1-7');
Route::get('/classes.1-8','ClassesController@class1_8')->name('classes.1-8');
Route::get('/classes.1-9','ClassesController@class1_9')->name('classes.1-9');
//class2
Route::get('/classes.2-1','ClassesController@class2_1')->name('classes.2-1');
Route::get('/classes.2-2','ClassesController@class2_2')->name('classes.2-2');
Route::get('/classes.2-3','ClassesController@class2_3')->name('classes.2-3');
Route::get('/classes.2-4','ClassesController@class2_4')->name('classes.2-4');
Route::get('/classes.2-5','ClassesController@class2_5')->name('classes.2-5');
Route::get('/classes.2-6','ClassesController@class2_6')->name('classes.2-6');
Route::get('/classes.2-7','ClassesController@class2_7')->name('classes.2-7');
Route::get('/classes.2-8','ClassesController@class2_8')->name('classes.2-8');
//class3
Route::get('/classes.3-1','ClassesController@class3_1')->name('classes.3-1');
Route::get('/classes.3-2','ClassesController@class3_2')->name('classes.3-2');
Route::get('/classes.3-3','ClassesController@class3_3')->name('classes.3-3');
Route::get('/classes.3-4','ClassesController@class3_4')->name('classes.3-4');
Route::get('/classes.3-5','ClassesController@class3_5')->name('classes.3-5');
Route::get('/classes.3-6','ClassesController@class3_6')->name('classes.3-6');
Route::get('/classes.3-7','ClassesController@class3_7')->name('classes.3-7');
Route::get('/classes.3-8','ClassesController@class3_8')->name('classes.3-8');
Route::get('/classes.3-9','ClassesController@class3_9')->name('classes.3-9');
//class4
Route::get('/classes.4-1','ClassesController@class4_1')->name('classes.4-1');
Route::get('/classes.4-2','ClassesController@class4_2')->name('classes.4-2');
Route::get('/classes.4-3','ClassesController@class4_3')->name('classes.4-3');
Route::get('/classes.4-4','ClassesController@class4_4')->name('classes.4-4');
Route::get('/classes.4-5','ClassesController@class4_5')->name('classes.4-5');
Route::get('/classes.4-6','ClassesController@class4_6')->name('classes.4-6');
Route::get('/classes.4-7','ClassesController@class4_7')->name('classes.4-7');
Route::get('/classes.4-8','ClassesController@class4_8')->name('classes.4-8');
Route::get('/classes.4-9','ClassesController@class4_9')->name('classes.4-9');
Route::get('/classes.4-10','ClassesController@class4_10')->name('classes.4-10');
//class5
Route::get('/classes.5-1','ClassesController@class5_1')->name('classes.5-1');
Route::get('/classes.5-2','ClassesController@class5_2')->name('classes.5-2');
Route::get('/classes.5-3','ClassesController@class5_3')->name('classes.5-3');
Route::get('/classes.5-4','ClassesController@class5_4')->name('classes.5-4');
Route::get('/classes.5-5','ClassesController@class5_5')->name('classes.5-5');
Route::get('/classes.5-6','ClassesController@class5_6')->name('classes.5-6');
Route::get('/classes.5-7','ClassesController@class5_7')->name('classes.5-7');
Route::get('/classes.5-8','ClassesController@class5_8')->name('classes.5-8');
Route::get('/classes.5-9','ClassesController@class5_9')->name('classes.5-9');
Route::get('/classes.5-10','ClassesController@class5_10')->name('classes.5-10');
//class6
Route::get('/classes.6-1','ClassesController@class6_1')->name('classes.6-1');
Route::get('/classes.6-2','ClassesController@class6_2')->name('classes.6-2');
Route::get('/classes.6-3','ClassesController@class6_3')->name('classes.6-3');
Route::get('/classes.6-4','ClassesController@class6_4')->name('classes.6-4');
Route::get('/classes.6-5','ClassesController@class6_5')->name('classes.6-5');
Route::get('/classes.6-6','ClassesController@class6_6')->name('classes.6-6');
Route::get('/classes.6-7','ClassesController@class6_7')->name('classes.6-7');
Route::get('/classes.6-8','ClassesController@class6_8')->name('classes.6-8');
Route::get('/classes.6-9','ClassesController@class6_9')->name('classes.6-9');
//class7
Route::get('/classes.7-1','ClassesController@class7_1')->name('classes.7-1');
Route::get('/classes.7-2','ClassesController@class7_2')->name('classes.7-2');
Route::get('/classes.7-3','ClassesController@class7_3')->name('classes.7-3');
Route::get('/classes.7-4','ClassesController@class7_4')->name('classes.7-4');
Route::get('/classes.7-5','ClassesController@class7_5')->name('classes.7-5');
Route::get('/classes.7-6','ClassesController@class7_6')->name('classes.7-6');
Route::get('/classes.7-7','ClassesController@class7_7')->name('classes.7-7');
//class8
Route::get('/classes.8-1','ClassesController@class8_1')->name('classes.8-1');
Route::get('/classes.8-2','ClassesController@class8_2')->name('classes.8-2');
Route::get('/classes.8-3','ClassesController@class8_3')->name('classes.8-3');
Route::get('/classes.8-4','ClassesController@class8_4')->name('classes.8-4');
Route::get('/classes.8-5','ClassesController@class8_5')->name('classes.8-5');
Route::get('/classes.8-6','ClassesController@class8_6')->name('classes.8-6');
Route::get('/classes.8-7','ClassesController@class8_7')->name('classes.8-7');
Route::get('/classes.8-8','ClassesController@class8_7')->name('classes.8-8');
Route::get('/classes.8-9','ClassesController@class8_9')->name('classes.8-9');
//class9
Route::get('/classes.9-1','ClassesController@class9_1')->name('classes.9-1');
Route::get('/classes.9-2','ClassesController@class9_2')->name('classes.9-2');
Route::get('/classes.9-3','ClassesController@class9_3')->name('classes.9-3');
Route::get('/classes.9-4','ClassesController@class9_4')->name('classes.9-4');
Route::get('/classes.9-5','ClassesController@class9_5')->name('classes.9-5');
Route::get('/classes.9-6','ClassesController@class9_6')->name('classes.9-6');
Route::get('/classes.9-7','ClassesController@class9_7')->name('classes.9-7');


Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

//admin
Route::get('admin/login', function () {
    return view('admin/login');
});

// Route::get('admin/dashboard', function () {
//     return view('admin/dashboard');
// });

Route::get('admin/Գլխավոր', ["uses" => "Dashboard@dashboard", "as" => "dashboard"]);
Route::get('admin/Անձնակազմ/Վարչական', ["uses" => "PersonnelAdministrative@administrative", "as" => "administrative"]);
Route::get('admin/Անձնակազմ/Մանկավարժական/Ուսուցիչներ', ["uses" => "PersonnelTeachers@teachers", "as" => "teachers"]);
Route::get('admin/Անձնակազմ/Մանկավարժական/Այլ', ["uses" => "PersonnelOther@other", "as" => "other"]);
Route::get('admin/Անձնակազմ/Սպասարկող', ["uses" => "PersonnelServing@serving", "as" => "serving"]);
Route::get('admin/Առարկաներ', ["uses" => "Topic@topic", "as" => "topic"]);
Route::get('admin/Խորհուրդներ/Ծնողական', ["uses" => "CouncilParent@parentCouncil", "as" => "parentCouncil"]);
Route::get('admin/Խորհուրդներ/Ուսուցչական', ["uses" => "CouncilTeacher@teacherCouncil", "as" => "teacherCouncil"]);
Route::get('admin/Խորհուրդներ/Այլ', ["uses" => "CouncilOther@otherCouncil", "as" => "otherCouncil"]);
Route::get('admin/Դասարաններ/Ավելաացնել', ["uses" => "ClassroomAdd@addClassroom", "as" => "addClassroom"]);
Route::get('admin/Դասարան/{number}/Ավելաացնել', ["uses" => "ClassroomAddCategory@addClassroomCategory", "as" => "addClassroomCategory"]);
Route::get('admin/Դասարան/{number}/{id}/Ուսուցիչներ', ["uses" => "ClassCategoryTeachers@CategoryTeachers", "as" => "CategoryTeachers"]);
Route::get('admin/Դասարան/{number}/{id}/Աշակերտներ', ["uses" => "ClassCategoryStudents@CategoryStudents", "as" => "CategoryStudents"]);

//insert 
Route::post('/administrative/insert', ["uses" => "PersonnelAdministrative@insert"]);
Route::post('/teachers/insert', ["uses" => "PersonnelTeachers@insert"]);
Route::post('/other/insert', ["uses" => "PersonnelOther@insert"]);
Route::post('/serving/insert', ["uses" => "PersonnelServing@insert"]);
Route::post('/topic/insert', ["uses" => "Topic@insert"]);
Route::post('/parentCouncil/insert', ["uses" => "CouncilParent@insert"]);
Route::post('/teacherCouncil/insert', ["uses" => "CouncilTeacher@insert"]);
Route::post('/otherCouncil/insert', ["uses" => "CouncilOther@insert"]);
Route::post('/addClassroom/insert', ["uses" => "ClassroomAdd@insert"]);
Route::post('/addClassroomCategory/insert', ["uses" => "ClassroomAddCategory@insert"]);
Route::post('/CategoryTeachers/insert', ["uses" => "ClassCategoryTeachers@insert"]);
Route::post('/CategoryStudents/insert', ["uses" => "ClassCategoryStudents@insert"]);

// Ajax
Route::post('/administrative', ["uses" => "PersonnelAdministrative@edit"]);
Route::post('/teachers', ["uses" => "PersonnelTeachers@edit"]);
Route::post('/other', ["uses" => "PersonnelOther@edit"]);
Route::post('/serving', ["uses" => "PersonnelServing@edit"]);
Route::post('/topic', ["uses" => "Topic@edit"]);
Route::post('/parentCouncil', ["uses" => "CouncilParent@edit"]);
Route::post('/teacherCouncil', ["uses" => "CouncilTeacher@edit"]);
Route::post('/otherCouncil', ["uses" => "CouncilOther@edit"]);
Route::post('/CategoryStudents', ["uses" => "ClassCategoryStudents@edit"]);
Route::post('/CategoryTeachers', ["uses" => "ClassCategoryTeachers@edit"]);
Route::post('/addClassroomCategory', ["uses" => "ClassroomAddCategory@edit"]);
Route::post('/addClassroom', ["uses" => "ClassroomAdd@edit"]);

// update ajax
Route::post('/administrative/update', ["uses" => "PersonnelAdministrative@update"]);
Route::post('/teachers/update', ["uses" => "PersonnelTeachers@update"]);
Route::post('/other/update', ["uses" => "PersonnelOther@update"]);
Route::post('/serving/update', ["uses" => "PersonnelServing@update"]);
Route::post('/topic/update', ["uses" => "Topic@update"]);
Route::post('/parentCouncil/update', ["uses" => "CouncilParent@update"]);
Route::post('/teacherCouncil/update', ["uses" => "CouncilTeacher@update"]);
Route::post('/otherCouncil/update', ["uses" => "CouncilOther@update"]);
Route::post('/CategoryStudents/update', ["uses" => "ClassCategoryStudents@update"]);
Route::post('/CategoryTeachers/update', ["uses" => "ClassCategoryTeachers@update"]);
Route::post('/addClassroomCategory/update', ["uses" => "ClassroomAddCategory@update"]);
Route::post('/addClassroom/update', ["uses" => "ClassroomAdd@update"]);

// delete ajax
Route::post('/administrative/delete', ["uses" => "PersonnelAdministrative@delete"]);
Route::post('/teachers/delete', ["uses" => "PersonnelTeachers@delete"]);
Route::post('/other/delete', ["uses" => "PersonnelOther@delete"]);
Route::post('/serving/delete', ["uses" => "PersonnelServing@delete"]);
Route::post('/topic/delete', ["uses" => "Topic@delete"]);
Route::post('/parentCouncil/delete', ["uses" => "CouncilParent@delete"]);
Route::post('/teacherCouncil/delete', ["uses" => "CouncilTeacher@delete"]);
Route::post('/otherCouncil/delete', ["uses" => "CouncilOther@delete"]);
Route::post('/CategoryStudents/delete', ["uses" => "ClassCategoryStudents@delete"]);
Route::post('/CategoryTeachers/delete', ["uses" => "ClassCategoryTeachers@delete"]);
Route::post('/addClassroomCategory/delete', ["uses" => "ClassroomAddCategory@delete"]);
Route::post('/addClassroom/delete', ["uses" => "ClassroomAdd@delete"]);