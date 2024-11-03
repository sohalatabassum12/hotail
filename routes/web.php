<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/', [HomeController::class, 'home1'])->name('home1');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginCheck', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/my-appointment', [AppointmentController::class, 'myAppointment']);

Route::get('/register', [AuthController::class, 'index']);
Route::get('/room-booking', [RoomController::class, 'roomBooking'])->name('room.booking');
Route::post('/room-booking', [RoomController::class, 'bookingStore'])->name('booking.store');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');

Route::get('/dashboard/user-list', [DashboardController::class, 'userList'])->name('user.list');
Route::get('/dashboard/user-delete/{id}', [DashboardController::class, 'userDelete'])->name('user.delete');


Route::get('/dashboard/room-list', [RoomController::class, 'index'])->name('room.list');
Route::get('/dashboard/room-create', [RoomController::class, 'roomCreate'])->name('room.create');
Route::get('/dashboard/room-edit/{id}', [RoomController::class, 'editRoom'])->name('room.edit');
Route::post('/dashboard/room-store', [RoomController::class, 'roomStore'])->name('room.store');
Route::post('/dashboard/room-update', [RoomController::class, 'roomUpdate'])->name('room.update');


Route::get('/dashboard/apoointment-list', [AppointmentController::class, 'index'])->name('appointment.list');
Route::get('/dashboard/apoointment-approve/{id}', [AppointmentController::class, 'approve'])->name('appointment.approve');
Route::get('/dashboard/apoointment-reject/{id}', [AppointmentController::class, 'reject'])->name('appointment.reject');


//About


Route::get('/dashboard/about-list', [AboutController::class, 'index'])->name('about.list');
Route::get('/dashboard/about-create', [AboutController::class, 'aboutCreate'])->name('about.create');
Route::post('/dashboard/about-create', [AboutController::class, 'aboutCreate'])->name('about.create');
Route::get('/dashboard/about-edit/{id}', [AboutController::class, 'editabout'])->name('about.edit');
Route::post('/dashboard/about-store', [AboutController::class, 'aboutStore'])->name('about.store');
Route::post('/dashboard/about-update', [AboutController::class, 'aboutUpdate'])->name('about.update');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/dashboard/about-delete/{id}', [AboutController::class, 'aboutDelete'])->name('about.delete');


//staff

// Route::get('/staff-booking', [StaffController::class, 'staffBooking'])->name('staff.booking');
// Route::post('/staff-booking', [StaffController::class, 'staffStore'])->name('staff.store');

Route::get('/dashboard/staff-list', [StaffController::class, 'index'])->name('staff.list');
Route::get('/dashboard/staff-create', [StaffController::class, 'staffCreate'])->name('staff.create');
Route::get('/dashboard/staff-edit/{id}', [StaffController::class, 'editstaff'])->name('staff.edit');
Route::post('/dashboard/staff-store', [StaffController::class, 'staffStore'])->name('staff.store');
Route::post('/dashboard/staff-update', [StaffController::class, 'staffUpdate'])->name('staff.update');
Route::get('/dashboard/staff-delete/{id}', [StaffController::class, 'staffDelete'])->name('staff.delete');
