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

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::group(['middleware' => ['guest']], function () {

});

    Auth::routes(['verify'=>true]);
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/menu', 'MenuPageController@index')->name('menupage');
    Route::get('/', 'HomepageController@index')->name('homepage');
    // about
    Route::get('/about', 'HistoryMenuController@index')->name('history_menu');
//cntact
    Route::get('/contact', 'ContactpageController@contact_index')->name('contact');
    Route::post('/contact/create', 'ContactpageController@create')->name('contact_create');
    //Query
    Route::get('/admin/query', 'ContactpageController@query_index')->name('query');
    Route::post('/query/create', 'ContactpageController@create')->name('query_create');
    Route::post('/query/delete/{id}', 'ContactpageController@query_destroy')->name('query_delete');



//Backend

//*********************Admin**********************//

    Route::group(['middleware'=>['auth']],function(){

      Route::group(['middleware'=>['admin']],function(){

        Route::get('/admin/user', 'UserController@index')->name('dashboard');
        Route::get('/admin/user/role/{user}/assignrole', 'UserController@UserUpdate')->name('assignrole');
        Route::PATCH('/admin/user/role/assignrole/{user}', 'UserController@update')->name('user_update');
        //Role
        Route::get('/admin/role', 'RoleController@index')->name('role');
        Route::post('/admin/role/create', 'RoleController@create')->name('role_create');
        Route::post('/admin/role/delete/{id}', 'RoleController@role_destroy')->name('role_delete');
        // Reserve
        Route::get('/admin/reserve', 'ReservationpageController@reserve_table')->name('order');
        Route::post('/admin/reserve/delete/{id}', 'OrderController@reservation_delete')->name('reservation_delete');
        Route::get('/admin/reservation/create', 'OrderController@order_create')->name('order_create');
        //employee
        Route::get('/admin/employee', 'AdminController@index')->name('employee');
        //job info
        Route::get('/admin/employee/jobInfo', 'EJobInfoController@index')->name('e_jobInfo');
        Route::post('/admin/employee/jobInfo/create', 'EJobInfoController@create')->name('e_jobInfo_create');
        Route::get('/admin/employee/jobInfo/form', 'EJobInfoController@create_form')->name('e_jobInfo_form');
        Route::get('/admin/employee/jobInfo/{id}/updatepage', 'EJobInfoController@e_job_updatepage')->name('e_job_updatepage');
        Route::post('/admin/employee/jobInfo/update/{id}', 'EJobInfoController@e_job_update')->name('e_job_update');
        //order details
        Route::get('/admin/order/details', 'CustomerController@order_details')->name('order_details');

        //Daily Reports
        Route::get('/admin/reports', 'ReportController@daily')->name('daily_reports');
        Route::post('/admin/daily/reports', 'ReportController@dateinput')->name('dateinput');



});
});




    Route::group(['middleware'=>['auth']],function(){
      Route::get('/product', 'ProductController@product_index')->name('product');


      Route::group(['middleware'=>['chef',]],function(){
          Route::get('/category', 'ProductController@category_index')->name('category');
          Route::get('/category/form', 'ProductController@category_form')->name('category_form');
          Route::post('/category/create', 'ProductController@category_create')->name('category_create');
          Route::post('/category/destroy/{id}', 'ProductController@cat_destroy')->name('category_delete');
          Route::get('/category/{id}/updatepage', 'ProductController@category_updatepage')->name('category_updatepage');
          Route::post('/category/update/{id}', 'ProductController@category_update')->name('category_update');
          //Product Information
          Route::get('/product/form', 'ProductController@product_form')->name('product_form');
          Route::post('/product/create', 'ProductController@product_create')->name('product_create');
          Route::post('/product/destroy/{id}', 'ProductController@destroy')->name('product_delete');
          Route::get('/product/{id}/updatepage', 'ProductController@product_updatepage')->name('product_updatepage');
          Route::post('/product/update/{id}', 'ProductController@product_update')->name('product_update');
          //FoodType
          Route::get('/foodtype', 'FoodTypeController@index')->name('food_type');
          Route::post('/foodtype/create', 'FoodTypeController@create')->name('food_type_create');

});

});


//Auth::routes(['verify'=>true]);
    Route::group(['middleware'=>['auth']],function(){

      Route::group(['middleware'=>['customer']],function(){

        Route::get('/customer/home', 'CustomerController@index')->name('customer_home');

        //Reservationpage
        Route::get('/reservation', 'ReservationpageController@index')->name('reservationpage');
        Route::post('/reservation/create', 'ReservationpageController@create')->name('reservation_create');
        //Reviewpage
        Route::get('/review', 'ReviewpageController@index')->name('review');
        Route::post('/review/create', 'ReviewpageController@create')->name('review_create');
        //Contactpage0000000000000000

        //Cart------------>>>
        //MenuCart
        Route::get('/cart', 'MenucartController@cart')->name('cart');
        Route::get('/menucart/{product_id}', 'MenucartController@addtocart')->name('menucart');
        Route::get('/delete/from/cart/{cart_id}', 'MenucartController@cart_destroy')->name('cart_delete');
        Route::get('/clear/cart', 'MenucartController@cart_clear')->name('cart_clear');
        Route::get('/checkout', 'MenucartController@checkout')->name('checkout');
        Route::get('/confirm/order', 'MenucartController@confirm_order')->name('confirm_order');
        Route::post('/confirm/order/create', 'OrderController@order_create')->name('order_create');
        //payment gateway
        Route::get('stripe', 'StripePaymentController@stripe');
        Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
        //Report
        Route::get('/report/invoice/{id}', 'ReportController@index')->name('invoice');
        //product SORT
        Route::get('/menu/sort/{id}', 'ProductController@sort')->name('menu_sort');


});
});


    Route::group(['middleware'=>['auth']],function(){

      Route::group(['middleware'=>['employee']],function(){

        Route::get('/employeeinfo', 'EmployeeInfoController@index')->name('employeeinfo');
        Route::post('/employeeinfo/create', 'EmployeeInfoController@create')->name('employeeinfo_create');
        Route::get('/employeeinfo/personal', 'EmployeeInfoController@employee_table')->name('employee_table');
        Route::get('/employeeinfo/{id}/updatepage', 'EmployeeInfoController@updatepage')->name('employeeupdatepage');
        Route::post('/employeeinfo/update/{id}', 'EmployeeInfoController@update')->name('employeeupdate');
        Route::get('/employeeinfo/contact', 'EmployeeInfoController@e_contact')->name('employeeinfo_contact');
        Route::get('/employeeinfo/emergency_contact', 'EmployeeInfoController@e_emergency')->name('employeeinfo_emergency');
        // job info
        Route::get('/employeeinfo/jobInfo', 'EJobInfoController@index_for_employee')->name('jobInfo');

    });

});



    //FoodCategory
    //Route::get('/admin/foodcategory', 'FoodCategoryController@index')->name('food_category');
    //Route::post('/admin/foodcategory/create', 'FoodCategoryController@create')->name('food_category_create');


      //stock Information
      Route::get('/stock', 'ProductController@stock_index')->name('stock');
      Route::get('/stock/form', 'ProductController@stock_form')->name('stock_form');
      Route::post('/stock/create', 'ProductController@stock_create')->name('stock_create');
      Route::get('/stock/{id}/updatepage', 'ProductController@stock_updatepage')->name('stock_updatepage');
      Route::post('/stock/update/{id}', 'ProductController@stock_update')->name('stock_update');
      Route::post('/stock/destroy/{id}', 'ProductController@stock_destroy')->name('stock_delete');


    //logout
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


//*************backend End*************//


    // //Authentication
    // Route::get('/register', 'CustomerRegistrationController@index')->name('register');
    // Route::post('/register/create', 'CustomerRegistrationController@create')->name('create');


//new dashboard   ->>>>>>>>>>>>
      Route::get('/admin/home', 'NewThemeController@index')->name('admin_home');



      Route::group(['middleware'=>['auth']],function(){
        Route::get('/delivery/details', 'DeliveryController@index')->name('delivery_details');
        Route::get('/delivery/details/status/{id}', 'DeliveryController@status')->name('delivery_details_status');

        Route::group(['middleware'=>['delivery_boy']],function(){


        });

      });
