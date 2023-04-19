<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\Frontend\RequestController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedireqestController;
use App\Http\Controllers\MydonationController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RequestContext;

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

// For Website Route

Route::get('/',[FrontendHome::class,'home'])->name('website');
Route::post('/user-store',[FrontendHome::class,'userStore'])->name('user.store');
Route::post('/donor-login',[FrontendHome::class, 'userLogin'])->name('user.login');

// Request Medicine

Route::get('/req-med',[RequestController::class,'requestlist'])->name('request.list');

// UserReq
Route::get('/user-req/{id}',[RequestController::class,'userReq'])->name('user.req');
Route::post('user-req/store',[RequestController::class,'userSotre'])->name('user.store');




// For admin route
Route::group(['prefix'=>'admin'],function(){

    Route::get('/login',[HomeController::class,'login'])->name('login');
    Route::post('/do-login',[HomeController::class,'doLogin'])->name('do.login');

    Route::group(['middleware'=>'auth'],function() {
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/logout',[HomeController::class,'logout'])->name('logout');

    // For medicine category
    Route:: get ('/medicine/list', [MedicineController::class,'medicinelist'])->name('medicine.list');
    Route:: get ('/medicine/create', [MedicineController::class,'create'])->name('medicine.create');
    Route::post('/medicine/store', [MedicineController::class,'medicinestore'])->name('medicine.store');
    



    // For Category
    Route::get('/category/list',[CategoryController::class,'categorylist'])->name('category.list');
    Route::get ('/category/create', [CategoryController::class,'categorycreate'])->name('category.create');
    Route::post('/category/store', [CategoryController::class,'categorystore'])->name('category.store');

    // For Brand
    Route::get('/brand/list',[BrandController::class,'brandlist'])->name('brand.list');
    Route::get('/brand/create',[BrandController::class,'brandcreate'])->name('brand.create');
    Route::post('/brand/store',[BrandController::class,'brandstore'])->name('brand.store');
    
    

    // For Donor
    Route::get('/donor/list', [DonorController::class,'donor'])->name('donor.list');

    // For Donation
    Route::get('/donation/list',[DonationController::class,'donation'])->name('donation.list');

    // For volunteer
    Route::get('/volunteer/list',[VolunteerController::class,'list'])->name('volunteer.list');
    Route::get('/volunteer/create',[VolunteerController::class,'create'])->name('volunteer.create');
    Route::post('/volunteer/store',[VolunteerController::class,'store'])->name('volunteer.store');
    Route::get('/volunteer/view/{id}',[VolunteerController::class,'view'])->name('volunteer.view');
    Route::get('/volunteer/delete/{id}',[VolunteerController::class,'delete'])->name('volunteer.delete');
    Route::get('/voulunteer-search', [VolunteerController::class,'voulunteerSearch'])->name('volunteer.search');

    // For donaton medicine
    Route::get('/dashbroad',[MydonationController::class ,'dashbroad'])->name('dashbroad');
    Route::get('/donation-med',[MydonationController::class ,'medicine'])->name('donation.med');
    Route::post('/donation-med/store',[MydonationController::class ,'medicineStore'])->name('donationmed.store');
    Route::get('/mydonation/list',[MydonationController::class ,'mydonationList'])->name('mydonation.list');

    // For request medicine
    Route::get('/medireq/list',[MedireqestController::class ,'medireq'])->name('medireq.list');
});

});