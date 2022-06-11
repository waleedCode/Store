<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientCRUDController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;




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

Route::get('/' , [HomeController::class ,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect' , [HomeController::class ,'redirect']);

Route::get('/view_category' , [AdminController::class ,'view_category']);


// Route::post('/add_category' , [AdminController::class ,'add_category']);

// Route::get('/delete_category/{id}' , [AdminController::class ,'delete_category']);

// Route::get('/view_product' , [AdminController::class ,'view_product']);

// Route::post('/add_product' , [AdminController::class ,'add_product']);


// Route::get('/show_product' , [AdminController::class ,'show_product']);

// Route::get('/delete_product/{id}', [AdminController::class ,'delete_product']);

// Route::get('/update_product/{id}', [AdminController::class ,'update_product']);

// Route::resource('cars' , 'CarController2@index');




// // // Order Route

// Route::get('/view_order' , [AdminController::class ,'view_order']);

// Route::post('/add_order' , [AdminController::class ,'add_order']);


// Route::get('/show_order' , [AdminController::class ,'show_order']);

// Route::get('/delete_order/{id}', [AdminController::class ,'delete_order']);

// Route::get('/update_order/{id}', [AdminController::class ,'update_order']);




Route::resource('clients', ClientCRUDController::class);


///////  x1 الشركــــــــــــة //////
Route::get('/cpanle', function () {
    return view('admin.sa.cpanle');
});

 ///////////الدووووووووول  ////
 Route::get('/cpanleall', function () {
    return view('admin.sa.cpanleall');
});

/////////**********  اضافة وحذف مندوبيين*///////////////
Route::get('/sa-users', function () {
    return view('admin.sa.index');
});


/// ادارة السعودية ////

Route::get('/sa-admin', function () {
    return view('admin.sa.sa');
});


///المهام ////
Route::get('/sa-users-tasks', function () {
    return view('clients.tasks');
});


//// ادارة بيانات العملاء  السعودية
Route::get('/clients-dd', function () {
    return view('clients.clients');
});



///////ادارة شركات العملاء/////
Route::get('/waleed', function () {
    return view('admin.sa.one');
});


Route::get('/clients-company', function () {
    return view('clients.company.clients-company');
});


Route::get('/create-clients-company', function () {
    return view('clients.company.create-clients-company');
});


Route::get('/edit-clients-company', function () {
    return view('clients.company.edit-clients-company');
});


////     شركات النقل
Route::get('/transport-company', function () {
    return view('admin.drivers.transport-company');
});

Route::get('/create-transport-company', function () {
    return view('admin.drivers.create-transport-company');
});

Route::get('/edit-transport-company', function () {
    return view('admin.drivers.edit-transport-company');
});








///////          ادارة العملاء الافراد           //////////////////
Route::get('/create-client', function () {
    return view('clients.clients-edit');
});

Route::get('/create-client', function () {
    return view('clients.create-client');
});


// //////////////




Route::get('/clients-all', function () {
    return view('admin.sa.cpanleallclients');
});
//sa users
Route::get('/stop-client', function () {
    return view('clients.stop');
});

Route::get('/driver', function () {
    return view('admin.drivers.drivers');
});




Route::get('/trans-company', function () {
    return view('admin.drivers');
});


Route::get('/ind-trans', function () {
    return view('admin.sa.drivers');
});

Route::get('/create-trans-company', function () {
    return view('clients.create-trans-company');
});
 
Route::get('/edit-client', function () {
    return view('clients.clients-edit');
});


Route::get('/sa-realtion', function () {
    return view('clients.relation');
});


Route::get('/e', function () {
    return view('clients.editClient');
});

Route::get('/sa-tasks', function () {
    return view('clients.tasks');
});

Route::get('/sa-stop', function () {
    return view('clients.stop');
});


//////////  كل السائيقين
Route::get('/create-drivers', function () {
    return view('admin.drivers.drivers');
});


/////// اضافة سائق

Route::get('/drivers-sa', function () {
    return view('admin.drivers.drivers');
});

///// تعديل السائقيين

Route::get('/drivers-edit', function () {
    return view('admin.drivers.drivers-edit');
});



//////// ايقاف سائق


Route::get('/stop-drivers', function () {
    return view('admin.stop.stop-drivers');
});


///////////////       انشاء مستخدم               ///////////////////

Route::get('/create-user', function () {
    return view('clients.create-user');
});


//////////////           تعديل المستخدم   /////////////
Route::get('/edit-user', function () {
    return view('clients.edit-user');
});




///////      موظفيين      ///////////

Route::get('/employees', function () {
    return view('admin.users.employees');
});
///////          انشاء موظف       //////////
Route::get('/create-employee', function () {
    return view('admin.users.create-employee');
});
/////          تعديل بيانات موظف     ////////////
Route::get('/edit-employee', function () {
    return view('admin.users.edit-employee');
});


///////////      مهام الموظف       /////////////

Route::get('/employee-tasks', function () {
    return view('admin.users.employee-tasks');
});


///////////// كل الطلبات ////////////////

Route::get('/all-orders', function () {
    return view('admin.sa.orders.all-orders');
});


//////////        الطلبات القائمة        /////////////

Route::get('/current-orders', function () {
    return view('admin.sa.orders.current-orders');
});


Route::get('/invoice', function () {
    return view('admin.sa.orders.invoice');
});

////////    الطلبات الملغية         ///////////
Route::get('/canceled-orders', function () {
    return view('admin.sa.orders.canceled-orders');
});


/////////       الطلبات القابلة للتفاوض           /////////////

Route::get('/negotiable', function () {
    return view('admin.sa.orders.negotiable-orders');
});


///////////            تفاصيل  الطلب القابل للتفاوض   ///////////

Route::get('/order-details', function () {
    return view('admin.sa.orders.order-details');
});



///////////            تفاصيل  الطلب غير قابلة للتفاوض   ///////////

Route::get('/nonenegotiable', function () {
    return view('admin.sa.orders.nonenegotiable-orders');
});


//////    الطلبات المنجز         ///////////
Route::get('/done-orders', function () {
    return view('admin.sa.orders.done-orders');
});


//////              ربط وايقاف العملاء والسائقيين بالشركات   ///////////////////


Route::get('/realtion-c-d', function () {
        return view('admin.stop.reation-c-d');
    });

    Route::get('/realtion-client', function () {
        return view('admin.stop.realtion-client');
    });

    Route::get('/realtion-driver', function () {
        return view('admin.stop.realtion-driver');
    });

////////     الايقافات والغرامات   للعميل والسائق       ///////////


Route::get('/stop-block', function () {
    return view('admin.stop.stop-block');
});

 //////////        ايقافات العميل     //////////
Route::get('/stop-clients', function () {
    return view('admin.stop.stop-clients');
});

Route::get('/stop-clients-tasks', function () {
    return view('admin.stop-clients-tasks');
});



///////         ايقاف السائق       ///////////
Route::get('/stop-drivers', function () {
    return view('admin.stop.stop-drivers');
});



Route::get('/stop-drivers-tasks', function () {
    return view('clients.stop-drivers-tasks
    ');
});



Route::get('/rent-request', function () {
    return view('admin.rent.rent-request');
});



Route::get('/rent-pdf', function () {
    return view('clients.rent-pdf');
});


Route::get('/deposits-clients', function () {
    return view('admin.deposits.deposits-clients');
});

Route::get('/deposits-drivers', function () {
    return view('admin.deposits.deposits-drivers');
});

Route::get('/deposits', function () {
    return view('admin.deposits.deposits');
});

Route::get('/wallet-clients', function () {
    return view('admin.wallet.wallet-clients');
});

Route::get('/wallet-drivers', function () {
    return view('admin.wallet.wallet-driver');
});


/////        محفظة x1        //////////

Route::get('/x1-main', function () {
    return view('admin.wallet.x1-main');
});







Route::get('/x1', function () {
    return view('admin.wallet.x1');
});





 
Route::get('/confirmation', function () {
    return view('clients.confirmation-money');
});


////////// طلبات  الاشتراك علي x1 ///////////



Route::get('/x1-new-order', function () {
    return view('admin.wallet.x1-new-order');
});


Route::get('/x1-new-order-file', function () {
    return view('admin.wallet.x1-new-order-file');
});

Route::get('/x1-joint-companies', function () {
    return view('admin.wallet.x1-joint-companies');
});

Route::get('/x1-add-companies-file', function () {
    return view('admin.wallet.x1-add-companies-file');
});

Route::get('/x1-add-money', function () {
    return view('admin.wallet.x1-add-money');
});

        //////////      فواتير الشركات     //////////
Route::get('/companies-invoices', function () {
    return view('admin.invoice.companies-invoices');
});


Route::get('/clients-invoices', function () {
    return view('admin.invoice.clients-invoices');
});

///////////////////////////////////
Route::resource('orders-front', 'SaOrdersController');



Route::get('/aa', function () {
    return view('clients.create-orders');
});


Route::resource('posts', PostController::class);



Route::get('/new-orders', function () {
    return view('admin.sa.orders.new-orders');
});




Route::get('/drivers-data', function () {
    return view('admin.sa.orders.drivers-data');
});

Route::get('/clients-data', function () {
    return view('admin.sa.orders.clintes-data');
});




/////////////ربط السائق

// Route::get('/add-drivers', function () {
//     return view('admin.drivers-input.add-drivers');
// });


Route::resource('drivers', DriverController::class);

/////////clients crud //////
Route::get('/clients', [ClientCRUDController::class, 'index']);
Route::get('/search', [ClientCRUDController::class, 'search']);

Route::get('/add-clients', [ClientCRUDController::class, 'create']);

Route::post('/add-clients', [ClientCRUDController::class, 'store']);
Route::get('/search', [ClientCRUDController::class, 'search']);
Route::get('edit-client/{id}', [ClientCRUDController::class, 'edit']);

Route::put('update.client/{id}' ,[ClientCRUDController::class, 'update']);

// Route::get('/search',[SearchController::class ,'search'])->name('web.search');



////////// Test //////////

Route::get('/pagination', [PaginationController::class,'index']);

Route::get('/pagination/fetch_data', [PaginationController::class,'fetch_data']);

Route::get('/add-employee', [EmployeeController::class, 'create']);

Route::get('/index', [EmployeeController::class, 'index']);


Route::post('/add-employee', [EmployeeController::class, 'store']);

Route::get('/search', [EmployeeController::class, 'search']);


// Route::get('/stdtable', [ClientCRUDController::class, 'index2'])->name('stdtable');
