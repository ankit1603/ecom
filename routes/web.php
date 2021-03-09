
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/','indexcontroller@index');
Route::match(['get'],'/category/{id}','indexcontroller@category');
Route::match(['get'],'/pagesr/{id}','adminController@selectpage');
Route::match(['get','post'],'/pagesr/updatepage','adminController@updatepa');
Route::match(['get','post'],'/index/Register_to_Sale','indexcontroller@registertosale');

Route::match(['get','post'],'/admin','adminController@login');
Route::match(['get','post'],'/admins','adminController@logins');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Socialite')->prefix('login/facebook')->group(function(){
    //This will redirect us to the facebook login page.
    Route::get('/','LoginController@redirectToProvider')->name('login.facebook');

    //Callback after the login is successful.
    Route::get('/callback','LoginController@handleProviderCallback');
});
Route::group(['middleware' =>['auth']],function(){
Route::match(['get','post'],'/admin/dashboard','adminController@dashboard');



Route::match(['get','post'],'/admin/dashboard','adminController@dashboard');
Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
Route::match(['get','post'],'/vendor','adminController@login');
Route::match(['get','post'],'/vendor/dashboard','adminController@vendordashboard');
Route::match(['get','post'],'/vendor/add-category','CategoryController@addCategory');
Route::match(['get','post'],'/admin/add-subCategory','CategorySubGroupController@addsubCategory');
Route::match(['get','post'],'/vendor/add-subCategory','CategorySubGroupController@addsubCategory');
Route::match(['get','post'],'/admin/add-mainCategory','MainCategoryController@addmainCategory');
Route::match(['get','post'],'/vendor/add-mainCategory','MainCategoryController@addmainCategory');

//Delete Categories 
Route::get('/admin/deletecategory/{id}', 'CategoryController@deletecategory');
Route::get('/admin/deletesubcategory/{id}', 'CategorySubGroupController@deletesubcategory');
Route::get('/admin/deletemaincategory/{id}', 'CategorySubGroupController@deletemaincategory');
// Delete Brand
Route::get('/admin/deletebrand/{id}', 'BrandController@deletebrand');


//Edit Categories
//Route::match(['get', 'post'],'/admin/editcategory/{id}', 'CategoryController@editcategory');
Route::get('/admin/editcategory/{id}', 'CategoryController@editcategory');
Route::get('/admin/editsubcategory/{id}', 'CategorySubGroupController@editsubcategory');

// Add  product page

Route::get('/vendor/viewproducts/{id}', 'ProductsController@viewproducts');
Route::get('/vendor/deleteproducts/{id}', 'ProductsController@deleteproducts');
Route::get('/admin/viewproducts/{id}', 'ProductsController@viewproducts');
Route::get('/admin/deleteproducts/{id}', 'ProductsController@deleteproducts');
Route::match(['get', 'post'],'/admin/editproducts/{id}', 'ProductsController@editproducts');
Route::get('/vendor/editproducts/{id}','ProductsController@editproducts')->name('editproducts');
Route::post('vendor/editproducts/{id}','ProductsController@saveEdit');


//Add Manufacturer Routes
Route::match(['get','post'],'/admin/manufacturer','ManufacturerController@addManufacturer');
Route::get('/admin/deletemanufacturer/{id}', 'ManufacturerController@deletemanufacturer');


// orders

/*Route::match(['get','post'],'/vendor/order','ProductsController@product');
Route::match(['get','post'],'/vendor/order-detail', 'OrderController@order-detail')*/

//Route::get('/admin/order', 'adminController@ordertable');
Route::match(['get','post'],'/admin/order','adminController@order');

Route::get('/admin/productdelstatus', 'Merchantcontroller@productorder');
Route::get('/admin/pendingv', 'Merchantcontroller@pendingtomer');
Route::get('/admin/deliverys', 'Merchantcontroller@deliverys');
Route::get('/admin/delivered', 'Merchantcontroller@delivered');
Route::get('/admin/cancelled', 'Merchantcontroller@cancelled');
Route::get('/admin/returnreq', 'Merchantcontroller@returnreq');
Route::match(['get','post'], '/admin/coupanm', 'Merchantcontroller@coupanm');


Route::get('/vendor/productdelstatus', 'Merchantcontroller@productorder');
Route::get('/vendor/pendingv', 'Merchantcontroller@pendingtomer');
Route::get('/vendor/deliverys', 'Merchantcontroller@deliverys');
Route::get('/vendor/delivered', 'Merchantcontroller@delivered');
Route::get('/vendor/cancelled', 'Merchantcontroller@cancelled');
Route::get('/vendor/returnreq', 'Merchantcontroller@returnreq');
Route::get('/vendor/coupanm', 'Merchantcontroller@coupanm');
Route::get('/vendor/order', 'adminController@order');

Route::get('/vendor/orderdetail/', 'adminController@orderdetail');
Route::get('/vendor/vieworderdetail/{id}', 'adminController@vieworderdetail');
Route::get('/vendor/checkinvoice/{orderid}', 'adminController@invoice');
Route::get('generate-pdf','PdfgenrateController@generatePDF');

//Add Customer

/*Route::group(['as' => 'admin.', 'prefix' => 'admin'], function()
		{
			include('admin/Customer.php');
		});*/

Route::get('/admin/customer', 'CustomerController@viewcustomer');
Route::get('/admin/customerdetail/{orderid}', 'CustomerController@viewcustomerdetail');



//View Customer Details
Route::get('/vendor/viewcustomerdetails/{id}', 'adminController@viewcustomerdetails');
//Add Slider
Route::match(['get','post'],'/admin/slider','SliderController@addslider');

//Add Brand
Route::match(['get','post'],'/admin/brand','BrandController@addbrand');

//Add Vendor
Route::match(['get','post'],'/admin/merchant','MerchantController@addvendor');
Route::get('/admin/deletevendor/{id}', 'VendorCommisionController@deletevendor');


//Add Products
Route::match(['get','post'],'/admin/create','ProductsController@addproduct');
Route::match(['get','post'],'/admin/view','ProductsController@product');
Route::match(['get','post'],'/admin/addimages','ProductsController@addproductimages');


Route::match(['get','post'],'/vendor/create','ProductsController@addproduct');
Route::match(['get','post'],'/vendor/view','ProductsController@product');
Route::match(['get','post'],'/vendor/addimages','ProductsController@addproductimages');


//Product Attributes Routes
//Route::match(['get','post'],'/admin/add-attribute/{id}','ProductsController@addAttribute');
Route::match(['get','post'],'/admin/view-inventory/{id}','ProductsController@viewAttribute');
Route::match(['get','post'],'/vendor/view-inventory','ProductsController@viewAttribute');
Route::match(['get','post'],'/admin/view-inventory','ProductsController@viewAttribute');

//Inventory Planning
Route::match(['get','post'],'/vendor/inventory-planning','ProductsController@inventoryplanning');

//Delete Inventory
Route::get('/vendor/deleteinventory/{id}', 'ProductsController@deleteinventory');
Route::get('/admin/deleteinventory/{id}', 'ProductsController@deleteinventory');


Route::match(['get','post'],'/admin/stock/inventory','ProductsController@viewAttribute');

//Add Supplier Routes
Route::match(['get','post'],'/admin/stock/supplier','SupplierController@addSupplier');


//Add Warehouse Routes
Route::match(['get','post'],'/admin/stock/warehouse','WarehouseController@addWarehouse');

//Product Inventory Routes
Route::match(['get','post'],'/admin/add-attribute/{id}','InventoryController@addAttribute');


//Vendor Commission
Route::match(['get','post'],'/admin/Vendor-commision','VendorCommisionController@vendorCommision');
Route::match(['get','post'],'/admin/vendorlist','VendorCommisionController@vendorlist');
Route::match(['get','post'],'/admin/vendorreq','VendorCommisionController@vendorreq');

//Coupons
Route::match(['get','post'],'/admin/coupons','CouponsController@addcoupons');
Route::get('/admin/deletecoupon/{id}', 'CouponsController@deletecoupon');
Route::get('/admin/editcoupon/{id}', 'CouponsController@editcoupon');

Route::match(['get','post'],'/admin/manishdetails','manishProfile@addmanish');
Route::match(['get','post'],'/admin/variationparameters','attributecontroller@addAttributevariations');
Route::match(['get','post'],'/admin/addvariation','variationscontroller@addvariations');
Route::match(['get','post'],'/placeorder','indexcontroller@placeorder');

 });
Route::match(['get','post'],'/registration','indexcontroller@registration');
Route::match(['get','post'],'/forgotPassword','indexcontroller@forgotpassword');
Route::match(['get','post'],'/AddressBook','indexcontroller@AddressBook');
Route::match(['get','post'],'/myOrders','indexcontroller@myOrders');
Route::match(['get','post'],'/myWishlist','indexcontroller@myWishlist');
Route::match(['get','post'],'/editaddress','indexcontroller@editaddress');
Route::match(['get','post'],'/editaddress','indexcontroller@editaddress');
Route::match(['get','post'],'/wishlistdelete/{id}','indexcontroller@wishlistdelete');
Route::match(['get','post'],'/pagination/fetch_data','indexcontroller@fetch_data');
Route::match(['get','post'],'pagination/checkfilter/{id}','indexcontroller@searchcat');
Route::match(['get','post'],'pagination/fetch_data/{categories}','indexcontroller@searchcat');




Route::post('/vacancies/searchcat', 'indexcontroller@searchcat');

Route::post('/manishedit', 'manishProfile@editmanish');
Route::get('/admin/variationparameters/addunits/{id}', 'attributecontroller@addattributesunit');
Route::get('/groups/{id}', 'indexcontroller@groups');
Route::get('/pages/{id}', 'indexcontroller@gopages');
Route::get('/product/{id}', 'indexcontroller@product');
// Route::group(['middleware'=>['auth']],function(){

Route::get('/cart/{id}', 'indexcontroller@cart');
Route::get('/myKart', 'indexcontroller@mycart');
Route::get('/myAccount', 'indexcontroller@myAccount');
Route::get('/ChangePassword', 'indexcontroller@changePassword');
Route::get('/register', 'indexcontroller@register');
Route::get('/checkout', 'indexcontroller@checkout');

Route::get('/remove/{id}', 'indexcontroller@remove');
Route::get('/removes/{id}', 'indexcontroller@removes');
Route::get('/admin/variations/addvalues/{id}', 'variationscontroller@addvariationvalues');
Route::get('/admin/variationparameters/deleteunits/{id}', 'attributecontroller@deleteattributesunit');
Route::get('/admin/variations/deletevaluess/{id}', 'variationscontroller@deletevariationsvalues');
Route::get('/admin/variations/deletevariations/{id}', 'variationscontroller@deletevariationss');
Route::post('/admin/variationparameters/addunitss/', 'attributecontroller@addattributesunits');
Route::post('/admin/variations/addvaluess/', 'variationscontroller@addvariatonsvaluess');
Route::post('/admin/variationparameters/editeunits/', 'attributecontroller@editattributesunits');
Route::get('/deleteManish/{id}', 'manishProfile@deleteData');
Route::get('/session/get/{id}','SessionController@accessSessionData');
Route::get('/session/set/{id}','SessionController@storeSessionData');
Route::get('/session/sets/{id}','SessionController@storeSessionDatas');
Route::get('/session/storewish/{id}','SessionController@storewish');
Route::get('/session/remove','SessionController@deleteSessionData');
Route::delete('remove-from-cart', 'indexcontroller@remove');
Route::patch('update-cart', 'indexcontroller@update');
Route::patch('update-carts', 'indexcontroller@updates');




Route::patch('getsponsor', 'membercontroller@getsponsor');
Route::patch('checkid', 'membercontroller@checkid');
Route::patch('checkplacement', 'membercontroller@checkplacement');
Route::patch('checkpanno', 'membercontroller@checkpanno');
Route::match(['get','post'],'/admin/memberRegistration','membercontroller@addmember');
Route::match(['get','post'],'admin/memberList','membercontroller@memberList');
Route::match(['get','post'],'admin/DirectDownline','membercontroller@DirectDownline');
Route::match(['get','post'],'admin/LeftDownline','membercontroller@LeftDownline');
Route::match(['get','post'],'admin/RightDownline','membercontroller@RightDownline');
Route::match(['get','post'],'admin/MatchingTree','membercontroller@MatchingTree');
Route::patch('generatetreee', 'membercontroller@generatetreee');
Route::get('/admin/activate/{id}','membercontroller@activatemember');
Route::match(['get','post'],'/admin/upgrade','membercontroller@upgrademember');
Route::patch('dailyclosing', 'membercontroller@dailyclosing');
Route::match(['get','post'],'/member/dashboard','adminController@memberdashboard');
Route::match(['get','post'],'member/DirectDownline','membercontroller@DirectDownline');
Route::match(['get','post'],'member/LeftDownline','membercontroller@LeftDownline');
Route::match(['get','post'],'member/RightDownline','membercontroller@RightDownline');
Route::match(['get','post'],'member/MatchingTree','membercontroller@MatchingTree');
Route::match(['get','post'],'member/FamilyPhoto','membercontroller@FamilyPhoto');
Route::match(['get','post'],'member/UploadSelfie','membercontroller@UploadSelfie');
Route::match(['get','post'],'member/TakeSelfie','membercontroller@TakeSelfie');
Route::match(['get','post'],'member/TalentHunt1','membercontroller@TalentHunt1');
Route::match(['get','post'],'member/TalentHunt2','membercontroller@TalentHunt2');
Route::patch('checkewallet', 'membercontroller@checkewallet');
Route::match(['get','post'],'admin/MemberFamilyPhoto/{id}','membercontroller@MemberFamilyPhoto');
Route::match(['get','post'],'admin/MemberSelfieList','membercontroller@MemberSelfieList');
Route::match(['get','post'],'admin/MemberTalentHuntList1','membercontroller@MemberTalentHuntList1');
Route::match(['get','post'],'admin/MemberTalentHuntList2','membercontroller@MemberTalentHuntList2');
Route::match(['get','post'],'admin/approveselfie/{id}','membercontroller@approveselfie');
Route::match(['get','post'],'admin/rejectselfie/{id}','membercontroller@rejectselfie');
Route::match(['get','post'],'admin/approvetalenthunt1/{id}','membercontroller@approvetalenthunt1');
Route::match(['get','post'],'admin/rejecttalenthunt1/{id}','membercontroller@rejecttalenthunt1');

Route::match(['get','post'],'admin/approvetalenthunt2/{id}','membercontroller@approvetalenthunt2');
Route::match(['get','post'],'admin/rejecttalenthunt2/{id}','membercontroller@rejecttalenthunt2');

Route::match(['get','post'],'admin/MemberRewardedList','membercontroller@MemberRewardedList');
Route::match(['get','post'],'admin/dispatchreward/{id}','membercontroller@dispatchreward');
Route::match(['get','post'],'admin/MemberClosingStatement','membercontroller@MemberClosingStatement');
Route::match(['get','post'],'member/ClosingStatement','membercontroller@ClosingStatement');
Route::match(['get','post'],'member/AddPayment','membercontroller@AddPayment');

Route::match(['get','post'],'member/PayAmount','membercontroller@PayAmount');

Route::match(['get','post'],'member/EditProfile','membercontroller@EditProfile');
Route::match(['get','post'],'member/ChangePassword','membercontroller@ChangePassword');

Route::get('/logout', 'adminController@logout');
Route::get('/logouts', 'adminController@logouts');


    Route::get('/notifications', 'adminController@notifications');
Route::get('/admin/dashboard', 'adminController@dashboard')->name('admin.dashboard')->middleware('is_admin');
// });