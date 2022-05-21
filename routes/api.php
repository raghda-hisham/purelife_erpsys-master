<?php

use App\Http\Controllers\CourseController;
use App\Http\Resources\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\ApiAuthController;
use App\Http\Resources\Departments;
use App\Http\Resources\Employees;
use App\Http\Resources\Locations;
use App\Http\Resources\Positions;
use App\Http\Resources\sectors;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Location;
use App\Models\Position;
use App\Models\Sector;

// use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//routes/api.php

/**
 * 
 */
Route::get('/listeemployee', function () {
    return Employees::collection(Employee::all());
});
// Route::get('listeemployee', 'EmployeeController@index');
Route::post('storeemployee', 'EmployeeController@store');
Route::get('showemployee/{id}', 'EmployeeController@show');
Route::post('editemployee/{id}', 'EmployeeController@update');
Route::post('deleteemployee/{id}', 'EmployeeController@destroy');
//location
Route::post('storelocation', 'LocationController@store');
Route::get('showlocation/{id}', 'LocationController@show');
Route::post('editlocation/{id}', 'LocationController@update');
Route::post('deletelocation/{id}', 'LocationController@destroy');
Route::get('/listlocation', function () {
    return Locations::collection(Location::all());
});
//Sector
Route::post('storesector', 'SectorController@store');
Route::get('showsector/{id}', 'SectorController@show');
Route::post('editsector/{id}', 'SectorController@update');
Route::post('deletesector/{id}', 'SectorController@destroy');
Route::get('/listsector', function () {
    return sectors::collection(Sector::all());
});
//Position
Route::post('storeposition', 'PositionController@store');
Route::get('showposition/{id}', 'PositionController@show');
Route::post('editposition/{id}', 'PositionController@update');
Route::post('deleteposition/{id}', 'PositionController@destroy');
Route::get('/listposition', function () {
    return Positions::collection(Position::all());
});
//Dept
Route::post('storedept', 'DepartmentController@store');
Route::get('showdept/{id}', 'DepartmentController@show');
Route::post('editdept/{id}', 'DepartmentController@update');
Route::post('deletedept/{id}', 'DepartmentController@destroy');
Route::get('/listdept', function () {
    return Departments::collection(Department::all());
});
//auth
Route::post('register','ApiAuthController@handleRegister');
Route::post('login','ApiAuthController@handleLogin');

// middleware to ensure that every request is authenticated
Route::middleware('auth:api')->group(function(){
Route::post('logout','ApiAuthController@handleLogout');

    //  Route::get('user', [ApiAuthController::class,'authenticatedUserDetails']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
