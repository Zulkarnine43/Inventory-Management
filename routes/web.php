<?php



Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

//EMPLOYEE ROUTES ARE HERE--------------------
Route::get('/add-employee', 'EmployeeController@index')->name('add.employee');
Route::post('/insert-employee','EmployeeController@store');
Route::get('/all-employee', 'EmployeeController@AllEmployee')->name('all.employee');
Route::get('/view-employee/{id}', 'EmployeeController@ViewEmployee');
Route::get('/delete-employee/{id}', 'EmployeeController@DeleteEmployee');
Route::get('/edit-employee/{id}', 'EmployeeController@EditEmployee');
Route::post('/update-employee/{id}','EmployeeController@UpdateEmployee');

//customers routes are here-------------------
Route::get('/add-customer', 'CustomerController@index')->name('add.customer');
Route::post('/insert-customer','CustomerController@Store');
Route::get('/all-customer', 'CustomerController@AllCustomer')->name('all.customer');
Route::get('/view-customer/{id}', 'CustomerController@ViewCustomer');
Route::get('/delete-customer/{id}', 'CustomerController@DeleteCustomer');
Route::get('/edit-customer/{id}', 'CustomerController@EditCustomer');
Route::post('/update-customer/{id}','CustomerController@UpdateCustomer');

//suppliers routes are here----------------
Route::get('/add-supplier', 'SupplierController@index')->name('add.supplier');
Route::post('/insert-supplier','SupplierController@SupplierStore');
Route::get('/all-supplier', 'SupplierController@AllSupplier')->name('all.supplier');
Route::get('/view-supplier/{id}', 'SupplierController@ViewSupplier');
Route::get('/delete-supplier/{id}', 'SupplierController@DeleteSupplier');
Route::get('/edit-supplier/{id}', 'SupplierController@EditSupplier');
Route::post('/update-supplier/{id}','SupplierController@UpdateSupplier');

//salary routes start from here
Route::get('/add-advenced-salary', 'SalaryController@AddAdvancedSalary')->name('add.advancedsalary');
Route::post('/insert-advancedsalary','SalaryController@InsertAdvanced');
Route::get('/all-advenced-salary', 'SalaryController@AllSalary')->name('all.advancedsalary');
Route::get('/pay-salary', 'SalaryController@PaySalary')->name('pay.salary');

//category rputes here------------
Route::get('/add-category','SalaryController@AddCategory')->name('add.category');
Route::post('/insert-category','SalaryController@InsertCategory');
Route::get('/all-catgory', 'SalaryController@AllCategory')->name('all.category');
Route::get('/delete-category/{id}', 'SalaryController@DeleteCategory');
Route::get('/edit-category/{id}', 'SalaryController@EditCategory');
Route::post('/update-category/{id}','SalaryController@UpdateCategory');

//Product Routes are here------------------
Route::get('/add-product','ProductController@AddProduct')->name('add.product');
Route::post('/insert-product','ProductController@InsertProduct');
Route::get('/all-product', 'ProductController@AllProduct')->name('all.product');
Route::get('/delete-product/{id}', 'ProductController@DeleteProduct');
Route::get('/view-product/{id}', 'ProductController@ViewProduct');
Route::get('/edit-product/{id}', 'ProductController@EditProduct');
Route::post('/update-product/{id}','ProductController@UpdateProduct');

//excel import and export
Route::get('/import-product','ProductController@ImportProduct')->name('import.product');
Route::get('/export','ProductController@export')->name('export');
Route::post('/import','ProductController@import')->name('import');

//Expense routes are here---------------------
Route::get('/add-expense','ExpenseController@AddExpense')->name('add.expense');
Route::post('/insert-expense','ExpenseController@InserExpense');
Route::get('/today-expense','ExpenseController@TodayExpense')->name('today.expense');
Route::get('/edit-today-expense/{id}', 'ExpenseController@EditTodayExpense');
Route::post('/update-expense/{id}','ExpenseController@UpdateExpense');
Route::get('/monthly-expense','ExpenseController@MonthlyExpense')->name('monthly.expense');
Route::get('/yearly-expense','ExpenseController@YearlyExpense')->name('yearly.expense');
//monthly more expenses----
Route::get('/january-expense','ExpenseController@JanuaryExpense')->name('january.expense');
Route::get('/february-expense','ExpenseController@FebruaryExpense')->name('february.expense');
Route::get('/march-expense','ExpenseController@MarchExpense')->name('march.expense');
Route::get('/april-expense','ExpenseController@AprilExpense')->name('april.expense');
Route::get('/may-expense','ExpenseController@MayExpense')->name('may.expense');
Route::get('/june-expense','ExpenseController@JuneExpense')->name('june.expense');
Route::get('/july-expense','ExpenseController@JulyExpense')->name('july.expense');
Route::get('/august-expense','ExpenseController@AugustExpense')->name('august.expense');
Route::get('/september-expense','ExpenseController@SeptemberExpense')->name('september.expense');
Route::get('/october-expense','ExpenseController@OctoberExpense')->name('october.expense');
Route::get('/november-expense','ExpenseController@NovemberExpense')->name('november.expense');
Route::get('/december-expense','ExpenseController@DecemberExpense')->name('december.expense');


//Attendences routes are here-----------------------
Route::get('/take-attendence','AttendenceController@TakeAttendence')->name('take.attendence');
Route::post('/insert-attendence','AttendenceController@InsertAttendence');
Route::get('/all-attendence','AttendenceController@AllAttendence')->name('all.attendence');
Route::get('/edit-attendence/{edit_date}', 'AttendenceController@EditAttednece');
Route::post('/update-attendence','AttendenceController@UpdateAttendence');
Route::get('/view-attendence/{edit_date}', 'AttendenceController@ViewAttednece');


//setting routes
Route::get('/website-setting','AttendenceController@Setting')->name('setting');
Route::post('/update-website/{id}', 'AttendenceController@UpdateWebsite');

//pos routes are here
Route::get('/pos','PosController@index')->name('pos');
Route::get('/pending/order','PosController@PendingOrder')->name('pending.orders');
Route::get('/view-order-status/{id}','PosController@ViewOrder');
Route::get('/view-order/{id}','PosController@ViewOrderdone');

Route::get('/pos-done/{id}','PosController@PosDONE');
Route::get('/success/order','PosController@SuccessOrder')->name('success.orders');
//Cart controller
Route::post('/add-cart', 'CartController@index');
Route::post('/cart-update/{rowId}', 'CartController@CartUpdate');


Route::get('/cart-remove/{rowId}', 'CartController@CartRemove');
Route::post('/invoice', 'CartController@CreateInvoice');
Route::post('/final-invoice', 'CartController@FinalInvoice');



//income routes are here---------------------
Route::get('/add-income','incomeController@Addincome')->name('add.income');
Route::post('/insert-income','incomeController@Inserincome');
Route::get('/today-income','incomeController@Todayincome')->name('today.income');
Route::get('/edit-today-income/{id}', 'incomeController@EditTodayincome');
Route::post('/update-income/{id}','incomeController@Updateincome');
Route::get('/monthly-income','incomeController@Monthlyincome')->name('monthly.income');
Route::get('/yearly-income','incomeController@Yearlyincome')->name('yearly.income');
//monthly more incomes----
Route::get('/january-income','incomeController@Januaryincome')->name('january.income');
Route::get('/february-income','incomeController@Februaryincome')->name('february.income');
Route::get('/march-income','incomeController@Marchincome')->name('march.income');
Route::get('/april-income','incomeController@Aprilincome')->name('april.income');
Route::get('/may-income','incomeController@Mayincome')->name('may.income');
Route::get('/june-income','incomeController@Juneincome')->name('june.income');
Route::get('/july-income','incomeController@Julyincome')->name('july.income');
Route::get('/august-income','incomeController@Augustincome')->name('august.income');
Route::get('/september-income','incomeController@Septemberincome')->name('september.income');
Route::get('/october-income','incomeController@Octoberincome')->name('october.income');
Route::get('/november-income','incomeController@Novemberincome')->name('november.income');
Route::get('/december-income','incomeController@Decemberincome')->name('december.income');

//edit order

Route::get('/edit-order/{id}', 'OrderController@EditOrder');
Route::post('/update-order/{id}','OrderController@UpdateOrder');