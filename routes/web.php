<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/',  'index')->name('home');
    Route::get('/about',  'about')->name('about');
    Route::get('/browse',  'browse')->name('browse');
    Route::post('/browse',  'browse')->name('browse');
    Route::get('/browse/{id}',  'browseEach')->name('browseEach');
    Route::get('/apostolic-hub',  'apostolicHub')->name('apostolichub');
    Route::get('/lecturer-speaker-author',  'lecturesSpeakers')->name('lecturesspeakers');
    Route::get('/kingdom-inspirations',  'kingdomInspiration')->name('kingdominspiration');
    Route::get('/contact',  'contact')->name('contact');
    Route::get('/conference',  'conference')->name('conference');
    Route::get('/fltc',  'fltc')->name('fltc');
    Route::get('/bio',  'bio')->name('bio');
    Route::get('/ministry',  'ministry')->name('ministry');
});

Route::controller(AdminController::class)->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', 'admin')->name('admin');
        Route::get('/login', 'login')->name('admin.login');
        Route::post('/login', 'loggedIn')->name('login');
        Route::get('/logout', 'logout')->name('admin.logout');
        Route::get('/signup', 'signup')->name('admin.signup');

        Route::get('/courses', 'courses')->name('admin.courses')->middleware('guard');
        Route::get('/instructors', 'teachers')->name('admin.teachers')->middleware('guard');
        Route::get('/students', 'students')->name('admin.students')->middleware('guard');
        Route::get('/shop', 'shop')->name('admin.shop')->middleware('guard');

        Route::get('/add-instructor', 'addTeachers')->name('add.teachers')->middleware('guard');
        Route::post('/add-instructor', 'registerTeachers')->name('add.teacher')->middleware('guard');

        Route::get('/add-course', 'addCourse')->name('add.course')->middleware('guard');
        Route::post('/add-course', 'addCourses')->name('add.courses')->middleware('guard');

        Route::get('/add-shop', 'addShop')->name('add.shop')->middleware('guard');
        Route::post('/add-shop', 'addShops')->name('add.shops')->middleware('guard');

        Route::get('/edit-shop/{id}', 'editShop')->name('edit.shop')->middleware('guard');
        Route::post('/update-shop/{id}', 'updateShop')->name('update.shop')->middleware('guard');
        Route::get('/delete-shop/{id}', 'deleteShop')->name('delete.shop')->middleware('guard');

        Route::get('/edit-course/{id}', 'editCourse')->name('edit.course')->middleware('guard');
        Route::post('/update-course/{id}', 'updateCourse')->name('update.course')->middleware('guard');
        Route::get('/delete-course/{id}', 'deleteCourse')->name('delete.course')->middleware('guard');
        Route::get('/publish-course/{id}', 'publishCourse')->name('publish.course')->middleware('guard');
        Route::get('/draft-course/{id}', 'draftCourse')->name('draft.course')->middleware('guard');

        Route::get('/edit-instructor/{id}', 'editTeacher')->name('edit.teacher')->middleware('guard');
        Route::get('/edit-student/{id}', 'editStudent')->name('edit.student')->middleware('guard');
        Route::post('/update-instructor/{id}', 'updateTeacher')->name('update.teacher')->middleware('guard');
        Route::get('/delete-instructor/{id}', 'deleteTeacher')->name('delete.teacher')->middleware('guard');

        Route::get('/calendar', 'calendar')->name('admin.calendar');
        Route::post('/calendar', 'addEvent')->name('admin.event');
        Route::delete('/calendar/{id}', 'delete')->name('event.delete');

        Route::get('/contact', 'contact')->name('admin.contact')->middleware('guard');
        Route::post('/contact', 'addContact')->name('admin.add');
        Route::get('/contact/{id}', 'deleteContact')->name('contact.delete')->middleware('guard');

        Route::get('/hub', 'hub')->name('admin.hub')->middleware('guard');
        Route::post('/hub', 'addHub')->name('admin.hub');
        Route::get('/hub/{id}', 'deleteHub')->name('hub.delete')->middleware('guard');

        Route::post('/checkout/{id}', 'checkout')->name('admin.checkout');
    });
});


Route::controller(StudentController::class)->group(function () {
    Route::post('/signup', 'register')->name('student.regitser');
    Route::prefix('/student')->group(function () {
        Route::get('/', 'student')->name('student')->middleware('auth');
        Route::get('/courses', 'courses')->name('student.courses')->middleware('auth');
        Route::get('/instructors', 'teachers')->name('student.teachers')->middleware('auth');
        Route::get('/enroll/{name}', 'enroll')->name('admin.enroll');
        Route::get('/classes', 'classes')->name('student.classes');
        Route::get('/shop', 'shop')->name('student.shop');
    });
});

Route::controller(TeachersController::class)->group(function () {
    Route::prefix('/instructor')->group(function () {
        Route::get('/', 'teacher')->name('teacher')->middleware('auth');
        Route::get('/courses', 'courses')->name('teacher.courses')->middleware('auth');
        Route::get('/students', 'students')->name('teacher.students')->middleware('auth');
        Route::get('/calendar', 'calendar')->name('teacher.calendar')->middleware('auth');
        Route::get('/shop', 'shop')->name('teacher.shop')->middleware('auth');
        Route::get('/contact/{id}', 'contact')->name('teacher.contact')->middleware('auth');
        Route::post('/send/{id}', 'contactStudent')->name('contact.student')->middleware('auth');
        Route::get('/email', 'email')->name('teacher.email')->middleware('auth');
        Route::get('/email/{id}', 'emailEach')->name('each.email')->middleware('auth');
    });
});

Route::prefix('/user')->group(function () {
    Route::get('/edit-account/{id}', [AccountController::class, 'editAccount'])->name('edit.account')->middleware('auth');
    Route::post('/edit-account/{id}', [AccountController::class, 'updateAccount'])->name('update.account')->middleware('auth');

    Route::get('/forgot-password', [AccountController::class, 'requestPassword'])->name('password.request')->middleware('guest');
    Route::post('/forgot-password', [AccountController::class, 'emailPassword'])->name('password.email')->middleware('guest');

    Route::get('/reset-password/{token}', [AccountController::class, 'resetPassword'])->name('password.reset')->middleware('guest');
    Route::post('/reset-password', [AccountController::class, 'updatePassword'])->name('password.update')->middleware('guest');
});
